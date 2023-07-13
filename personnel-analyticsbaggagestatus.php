<?php
session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';
}
?>

<!-- Content-Area -->
<div class="content">
    <input type="hidden" id="totalCount" name="totalCount" value="<?php echo $totalCount; ?>">
    <input type="hidden" id="ongoingCount" name="ongoingCount" value="<?php echo $ongoingCount; ?>">
    <input type="hidden" id="completedCount" name="completedCount" value="<?php echo $completedCount; ?>">

    <div class="main-title">
        Overall Baggage Tracking Status
    </div>

    <div style="width:400px; margin:0 auto">
        <canvas id="myChart"></canvas>
    </div>
</div>
<!-- /Content-Area -->

<?php
include 'footer.php';
?>

</div>

<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script id="firebaseScript">
    const firebaseConfig = {
        apiKey: "AIzaSyAsIlkYQFu9rExzhdpG5HHfnhEI66Unj-4",
        authDomain: "myx-baggage.firebaseapp.com",
        projectId: "myx-baggage",
        storageBucket: "myx-baggage.appspot.com",
        messagingSenderId: "342593572959",
        appId: "1:342593572959:web:4eac93d796cfa787000bea",
        measurementId: "G-5SKV7NKZY1"
    };

    firebase.initializeApp(firebaseConfig);
    let db = firebase.firestore();

    //function to update data in real time whenever there are changes in database record
    function getAllDataRealtime() {
        db.collection("trackings").onSnapshot((querySnapshot) => {
            var totalC = 0;
            var ongoingC = 0;
            var completedC = 0;
            var lastPoint = "";
            var latestPoint = "";

            querySnapshot.forEach(doc => {
                lastPoint = doc.data().lastPoint;
                latestPoint = doc.data().latestPoint;

                if (lastPoint == latestPoint)
                {
                    completedC++;
                }
                else
                {
                    ongoingC++;
                }

                totalC++;
                lastPoint = "";
                latestPoint = "";
            });

            const analyticsRef = db.collection("analytics").doc("baggageStatusAnalytics");
            analyticsRef.update({
                totalCount: totalC,
                ongoingCount: ongoingC,
                completedCount: completedC
            });

            db.collection("analytics").onSnapshot((querySnapshot) => {
                var allData = [];
                var allID = [];

                var analyticType = "baggageStatusAnalytics";

                querySnapshot.forEach(doc => {
                    allData.push(doc.data());
                    allID.push(doc.id);
                });

                var requiredData = [];

                for(let i=0; i<allID.length; i++)
                {
                    if(allID[i] == analyticType)
                    {
                        requiredData.push(allData[i]);
                    }
                }

                prepareChart(requiredData);
            });
        });
    }

    function prepareChart(dataList)
    {
        var displayContent = "";

        dataList.forEach(element => {
            if (element.totalCount < 1)
            {
                displayContent = '<p>No data found.</p>';
                $(displayContent).appendTo('#chartDiv');
                $('#myChart').hide();
            }
            else
            {
                $('p').hide();
                $('#myChart').show();
                showChart(element.totalCount, element.ongoingCount, element.completedCount);
            }
        });
    }

    function showChart(totalCount, ongoingCount, completedCount)
    {
        var xValues = ["Ongoing", "Completed"];
        var yValues = [];
        
        yValues.push(ongoingCount);
        yValues.push(completedCount);

        var barColors = [
            "#b91d47",
            "#2b5797"
        ];

        var count = "Tracking Count = " + totalCount;

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: count
                }
            }
        });
    }

    window.onload = getAllDataRealtime();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
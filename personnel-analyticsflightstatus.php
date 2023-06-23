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
    <div class="main-title">
        Overall Flight Status
    </div>

    <div id="chartDiv" class="chart-wrapper">
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
        db.collection("analytics").onSnapshot((querySnapshot) => {
            var allData = [];
            var allID = [];

            var analyticType = "flightStatusAnalytics";

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
    }

    function prepareChart(dataList)
    {
        var displayContent = "";

        dataList.forEach(element => {
            if (element.flightCount < 1)
            {
                displayContent = '<p>No data found.</p>';
                $(displayContent).appendTo('#chartDiv');
                $('#myChart').hide();
            }
            else
            {
                $('p').hide();
                $('#myChart').show();
                showChart(element.flightCount, element.noStatusCount, element.gateOpenCount, element.boardingCount, element.gateClosingCount, element.departedCount, element.landedCount);
            }
        });
    }

    function showChart(flightCount, noStatusCount, gateOpenCount, boardingCount, gateClosingCount, departedCount, landedCount)
    {
        var xValues = ["No Status", "Gate Open", "Boarding", "Gate Closing", "Departed", "Landed"];
        var yValues = [];

        yValues.push(noStatusCount);
        yValues.push(gateOpenCount);
        yValues.push(boardingCount);
        yValues.push(gateClosingCount);
        yValues.push(departedCount);
        yValues.push(landedCount);

        var barColors = [
            "rgba(0,0,255,0.17)",
            "rgba(0,0,255,0.33)",
            "rgba(0,0,255,0.5)",
            "rgba(0,0,255,0.67)",
            "rgba(0,0,255,0.83)",
            "rgba(0,0,255,1.0)"
        ];

        var count = "Flight Count = " + flightCount;

        new Chart("myChart", {
            type: "bar",
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
                },
                legend: {display: false},
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true,
                    suggestedMax: 100,
                    grace: '5%',
                    stepSize: 10
                    }
                }],
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
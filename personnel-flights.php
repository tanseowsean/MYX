<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <title>MYX Baggage Tracking System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <!-- Header -->
        <header>
            <div class="logo"><img src="images/logoXS.png" alt=""></div>
            <div class="search">
                <input type="text">
                <button><img src="images/icon-search.png" alt=""></button>
            </div>
            <div class="account">
                <div class="text">Hello, Xuan</div>
                <img src="images/user.png" alt="">
            </div>
        </header>
        <!-- /Header -->

        <!-- Menu -->
        <div class="menu">
            <a href="personnel-mainmenu.html" class="item">
                <div class="icon"><img src="images/icon-menu.png" alt=""></div>
                <div class="text">Main Menu</div>
            </a>
            <a href="personnel-checkin.html" class="item">
                <div class="icon"><img src="images/icon-checkin.png" alt=""></div>
                <div class="text">Check In</div>
            </a>
            <a href="personnel-flights.html" class="item">
                <div class="icon"><img src="images/icon-plane.png" alt=""></div>
                <div class="text">Flights</div>
            </a>
            <a href="personnel-configure.html" class="item">
                <div class="icon"><img src="images/icon-gear.png" alt=""></div>
                <div class="text">Configure</div>
            </a>
            <a href="personnel-baggage.html" class="item">
                <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
                <div class="text">Baggage</div>
            </a>
            <a href="personnel-analytics.html" class="item">
                <div class="icon"><img src="images/icon-data-analytics.png" alt=""></div>
                <div class="text">Analytics</div>
            </a>
        </div>
        <!-- /Menu -->

        <!-- Content-Area -->
        <div class="content">

            <!-- display flights -->
            <?php
            require_once 'Firestore.php';

            $fs = new Firestore('flights');

            //print_r($fs->getDocument('7ie7hmXxRbaBlHnNnF1R')); #get document details with this document ID
            //print_r($fs->getWhere('citizens', '>', 140000)); #get document details with operator and condition
            //print_r($fs->newDocument('Dublin'); #create empty document
            //print_r($fs->newDocument('Dublin', ['citizens' => 250000])); #create document with data
            //print_r($fs->newCollection('food', 'meet')); #create new collection with new empty document
            //print_r($fs->dropDocument('food')); #delete all documents in collection
            //print_r($fs->dropCollection('food)); #delete collection named food
            ?>

            <table>
                <thead>
                    <th>No.</th>
                    <th>Flight ID</th>
                    <th>Aircraft</th>
                    <th>Flight Date</th>
                    <th>Departure Location</th>
                    <th>Arrival Location</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                </thead>
                <tbody>
                    <?php
                        require_once 'Firestore.php';

                        $firestore = new Firestore('flights');
                        $firestore->retrieveAllFlightData();
                    ?>
                </tbody>
            </table>

        </div>
        <!-- /Content-Area -->

        <!-- Footer -->
        <footer>
            <div class="logo">
                <img src="images/logo-wt.png" alt="">
            </div>
            <div class="copyright">
                Copyright © MYX Baggage Tracking System 2023 All Rights Reserved.
            </div>
        </footer>
        <!-- /Footer -->

    </div>

    <script>
        function addItemToTable(aircraft, flightDate, departLocation, arriveLocation, departTime, arriveTime) {
            let trow = document.createElement("trow");
        }
    </script>
    <!-- <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>

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

        //function to retrieve data
        function getAllData() {
            db.collection("flights").get().then((querySnapshot)=>{
                var flights = [];
                querySnapshot.forEach(doc => {
                    flights.push(doc.data());
                });
                console.log(querySnapshot);
                console.log(flights);
            });
        }

        //function to update data in real time whenever there are changes in database record
        function getAllDataRealtime() {
            db.collection("flights").onSnapshot((querySnapshot)=>{
                var flights = [];
                querySnapshot.forEach(doc => {
                    flights.push(doc.data());
                });
                console.log(querySnapshot);
                console.log(flights);
            });
        }

        //function to display data on website page table
        var flightNo = 0;
        //var docId = doc.docId;
        var tbody = document.getElementById('tbodyFlights');

        function addItemToTable(aircraft, flightDate, departLocation, arriveLocation, departTime, arriveTime) {
            var trow = document.createElement('tr');
            var td1 = document.createElement('td');
            var td2 = document.createElement('td');
            var td3 = document.createElement('td');
            var td4 = document.createElement('td');
            var td5 = document.createElement('td');
            var td6 = document.createElement('td');
            var td7 = document.createElement('td');
            var td8 = document.createElement('td');

            td1.innerHTML = ++flightNo;
            td2.innerHTML = ++flightNo;
            td3.innerHTML = aircraft;
            td4.innerHTML = flightDate;
            td5.innerHTML = departLocation;
            td6.innerHTML = arriveLocation;
            td7.innerHTML = departTime;
            td8.innerHTML = arriveTime;

            trow.appendChild(td1);
            trow.appendChild(td2);
            trow.appendChild(td3);
            trow.appendChild(td4);
            trow.appendChild(td5);
            trow.appendChild(td6);
            trow.appendChild(td7);
            trow.appendChild(td8);

            tbody.appendChild(trow);
        }

        function addAllItemToTable(FlightsDocList) {
            flightNo = 0;
            tbody.innerHTML="";
            FlightsDocList.forEach
        }
        
        window.onload = getAllDataRealtime();

        // window.onload = getAllData(element => {
        //     addItemToTable(element.aircraft, element.flightDate, element.departLocation, element.arriveLocation, element.departTime, element.arriveTime);
        // });
    </script> -->
</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #map {
            height: 400px;
            width: 90%;
        }
    </style>
</head>

<body>


    <h3>My Maps Demo</h3>
    <div id="map"></div>

    <script>
        function initMap() {
            var itkmitl = {
                lat: 13.730828,
                lng: 100.7811935
            };
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 15,
                    center: itkmitl
                });
            var marker = new google.maps.Marker({
                position: itkmitl,
                title: 'Web Technology Lab',
                map: map
            });
        }
    </script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWevQxGAwyvcni6FhqnYVUYnI2xs9_onk&callback=initMap">
    </script> -->








</body>

</html>
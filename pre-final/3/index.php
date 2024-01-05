<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigga 3.12.0</title>
</head>

<body>
    <iframe id="map" width="100%" height="500" src="https://maps.google.com/maps?___data_goes_here___t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen>
    </iframe>
    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {

                const pos = {
                    'lat': position.coords.latitude,
                    'long': position.coords.longitude
                };

                console.log(pos);
                document.getElementById('map').src = 'https://maps.google.com/maps?q=' + pos.lat + ', ' + pos.long + '&t=&z=15&ie=UTF8&iwloc=&output=embed';
                // หรือใส่ชื่อสถานที่ได้เลยเช่น
                //document.getElementById('map').src = 'https://maps.google.com/maps?q=' + "KMITL" + '&t=&z=15&ie=UTF8&iwloc=&output=embed';
            });
        } else {
            console.error('location not supported');
        }
    </script>
</body>
</html>
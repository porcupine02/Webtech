<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        img {
            width: 50%;
        }

        table {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0;
        }

        td {
            font-size: larger;
            padding: 10px;
        }
        body{
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);
        foreach ($result as $country) {
            $location = "";
            $border = "";
            echo "<tr>";
            $name = $country->name;
            $capital = $country->capital;
            $population = $country->population;
            $region = $country->region;
            foreach ($country->latlng as $locations) {
                $location .= $locations . " ";
            }
            foreach ($country->borders as $borderr) {
                $border .= $borderr . " ";
            }
            $flag = $country->flag;
            echo "<td>Name : <b> $name </b><br>
            Capital : $capital<br>
            Population : $population<br>
            Region : $region<br>
            Location : $location<br>
            Borders : $border
            </td>
            <td><img src='$flag'>
            </td></tr>";
        }
        ?>
    </table>
</body>
</html>
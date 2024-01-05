<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <?php
    $url = "http://10.0.15.20/lab8/restapis/superheroes";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "Squad Name : $result->squadName<br>";
    echo "Home Town : $result->homeTown<br>";
    foreach ($result->members as $member) {
        echo "Member : $member->name $member->age<br>";
        foreach ($member->power as $p) {
            echo "$p";
        }
    }
    ?>

    <?php

    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-all";
    $response = file_get_contents($url);
    $result = json_decode($response);

    foreach ($result as $case) {
        echo "ข้อมูลวันที่ : $case->txn_date ";
        echo "จำนวนผู้ติดเชื้อ : $case->new_case ";
        echo "<br>";
    }

    ?>

</body>

</html>
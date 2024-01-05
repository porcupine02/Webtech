<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }
    </style>
</head>

<body>
    <?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);

    $day = rand(1, 30);
    if ($day < 10) {
        $day = "0" . $day;
    }
    $date = "2022-09-$day";
    $count = 1;
    ?>
    <div class="container">
        <h3>ข้อมูลผู้ป่วยโควิต 19 แต่ละจังหวัดของประเทศไทย</h3>
        <h4>วันที่ : <?php echo $date; ?></h4>
        <table class="table">
            <tr>
                <th>ลำดับ</th>
                <th>จังหวัด</th>
                <th>ผู้ติดเชื้อ</th>
                <th>เสียชีวิต</th>
                <th>ยอดผู้ป่วยละสม</th>
            </tr>

            <?php
            foreach ($result as $data) {
                if ($data->txn_date == $date) {
                    echo "<tr><td> $count </td>";
                    echo "<td> $data->province </td>";
                    echo "<td> $data->new_case </td>";
                    echo "<td> $data->new_death </td>";
                    echo "<td> $data->total_case </td>";


                    echo "</tr>";
                    $count++;
                }
            }


            ?>
        </table>
    </div>

</body>

</html>
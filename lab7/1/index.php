<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab7/1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    body {
        margin: 10px;
    }

    td {
        border-bottom: 2px solid red;
        padding: 10px;
    }
    </style>
</head>

<body>


    <form id="calform" action="index.php" method="post">
        กรอกแม่สูตรคูณ :
        <input type="number" id="num" name="inpnum" value="0">
        <input type="submit" id="submit" value="แสดงตาราง">
    </form>
    <table>
        <?php

        if (isset($_POST['inpnum'])) {
            $number = $_POST['inpnum'];
            $v = intval($number);
            echo "<h3>ตารางสูตรคูณแม่ " . $v . "</h3>";
            for ($i = 1; $i <= 12; $i++) {
                echo "<tr><td> $v </td><td> x </td><td>$i </td><td> = </td><td>" . $i * $v . "</td></tr>";
            }
        }
        ?>
    </table>
</body>

</html>
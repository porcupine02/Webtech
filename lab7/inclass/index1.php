<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inclass</title>
</head>

<body>
    <h1>PHP code part 1</h1>
    <?php
    $value = 10; // $ ประกาศตัวแปร
    $myarr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    $power_value = $value * $value;
    echo "Power of " . $value . " is " . $power_value;
    // .(dot) ขั้นหรือต่อการทำงานระหว่าง String and Variable : like "+"
    ?>
    <h1>PHP code part 2</h1>
    <?php
    for ($i = 0; $i < $value; $i++) {
        echo $i . " x " . $value . " = " . ($i * $value) . "<br>";
    }
    ?>
    <h1>PHP code part 3</h1>
    <?php
    // for ($i = 0; $i < sizeof($myarr); $i++) {
    //     // sizeof() is count lenght of array
    //     echo $myarr[$i] . " x " . $value . " = " . $myarr[$i] * $value . "<br>";
    // }


    // /*  using foreach
    foreach ($myarr as $value) {
        // array as (ตัวแปรที่มารับค่าในแต่ละรอบ เหมือน i j k) --> $value
        print("$value <br>");
        // print ใช้ได้แค่การแสดงผลเพียงค่าเดียวเท่านั้น
    }
    // */
    ?>
</body>

</html>
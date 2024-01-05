<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigga 1.1.5 </title>
</head>

<body>
    <form method="POST" action="index.php" style="margin:0 0 2em 0;">
        <input type="text" name="name" />
        <input type="text" name="age" />
        <input type="text" name="address" />
        <input type="text" name="salary" />
        <input type="hidden" name="isSubmit" value="true" />
        <input type="submit" value="submit" />
    </form>


    <?php
    // Connect to Database 
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('wt-company.db');
        }
    }

    // Open Database 
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "<script>console.log('Opened database successfully')</script>";
    }


    // Query process 
    // ขั้นตอนนี้คือการ select ข้อมูลในฐานข้อมูล
    $sql = "SELECT * from COMPANY";

    $max_id = 0;

    $ret = $db->query($sql);
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {

        if($row["ID"] > $max_id){
            $max_id = $row["ID"];
        }

        echo "ID = " . $row['ID'] . "<br>";
        echo "NAME = " . $row['NAME'] . "<br>";
        echo "ADDRESS = " . $row['ADDRESS'] . "<br>";
        echo "SALARY = " . $row['SALARY'] . "<hr/><br/>";
    }

    // ถ้ามีการรับ POST request มาจาก form
    if (isset($_POST["isSubmit"])) {
        $em_id = $max_id + 1;
        $em_name = $_POST["name"];
        $em_age = $_POST["age"];
        $em_addr = $_POST["address"];
        $em_salary = $_POST["salary"];

        $sql = <<<EOF
           INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
           VALUES ( $em_id, '$em_name', $em_age,'$em_addr', $em_salary );
       EOF;

        $ret = $db->exec($sql);
        if (!$ret) {
            echo $db->lastErrorMsg();
        } else {
            echo "<script>alert('Records created successfully')</script>";
        }
    }


    // Close database ในตอนสุดท้าย
    $db->close();
    ?>
</body>

</html>
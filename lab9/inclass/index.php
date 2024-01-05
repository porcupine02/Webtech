<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab9</title>
</head>

<body>
    <?php
    // Connect to Database -1.1
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('wt-company.db');
        }
    }

    // Open Database -1.2
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    // Query process -2

    // Create a Table using SQL 
    // CREATE TABLE nameofTable()

    // SQL SELECT * = all
    $em_id = 1;

    $sql = "UPDATE COMPANY set SALARY = 60000.00 where ID=$em_id";

    $ret = $db->exec($sql);
    if (!$ret) {
        echo $db->lastErrorMsg();
    } else {
        echo $db->changes(), " Record updated successfully<br>";
    }



    // Close database -3
    $db->close();

    ?>

</body>

</html>
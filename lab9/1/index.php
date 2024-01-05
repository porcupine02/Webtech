<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab9/1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin: 10px;
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">

        <?php

        echo "<form method='POST'>";
        // Connect to Database
        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open('customers.db');
            }
        }

        // Open Database
        $db = new MyDB();
        if (!$db) {
            echo $db->lastErrorMsg();
        }
        // else {
        //     echo "Opened database successfully<br>";
        // }

        // Query process

        $sql = "SELECT * from customers";

        $ret = $db->query($sql);
        echo "<table class='table'>";
        echo "<tr><th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th></tr>";
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr><td>" . $row['CustomerId'] . "</td>";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['Phone'] . "</td>";
            echo "<td>" . $row['Email'] . "</td></tr>";
            $id = $row['CustomerId'];
        }
        echo "</table>";



        echo "<button type='submit' class='btn btn-secondary' name='submit'>delete last row</button>";


        echo "</form>";
        if (isset($_POST['submit'])) {
            // echo "run";

            $sql = "DELETE from customers where CustomerId = $id";
            $ret = $db->exec($sql);
            return $ret;
        }


        // Close database
        $db->close();
        ?>


    </div>
</body>

</html>
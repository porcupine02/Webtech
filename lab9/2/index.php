<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab9/2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
        }
        th{
            text-align: center;
        }

        #age {
            width: 50px;
        }

        input {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <label>ID : </label>
            <input type="number" name="id" id="id"><br>
            <label>Name : </label>
            <input type="text" name="name" id="name"><br>
            <label>Age : </label>
            <input type="number" name="age" id="age"><br>
            <label>Salary : </label>
            <input type="number" name="salary" id="salary"><br>
            <label>Address : </label>
            <textarea type="text" name="address" id="address"></textarea><br>

            <input type="submit" name="submit">
        </form>
        <h3>List of Employees</h3>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Salary</th>
            </tr>


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
            }
            // Query process

            //             $sql = <<<EOF
            //    CREATE TABLE COMPANY
            //    (ID INT PRIMARY KEY     NOT NULL,
            //    NAME           TEXT    NOT NULL,
            //    AGE            INT     NOT NULL,
            //    ADDRESS        CHAR(50),
            //    SALARY         REAL);
            //  EOF;

            //             $ret = $db->exec($sql);

            if (isset($_POST['submit'])) {
                $em_id = $_POST['id'];
                $em_name = $_POST['name'];
                $em_age = $_POST['age'];
                $em_addr = $_POST['address'];
                $em_salary = $_POST['salary'];
                $sql = <<<EOF
        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary );

        EOF;
                $ret = $db->exec($sql);
            }

            $sql = "SELECT * from COMPANY";
            $ret = $db->query($sql);
            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['NAME'] . "</td>";
                echo "<td>" . $row['AGE'] . "</td>";
                echo "<td>" . $row['ADDRESS'] . "</td>";
                echo "<td>" . $row['SALARY'] . "</td>";
                echo "</tr>";
            }



            ?>
        </table>
    </div>


</body>

</html>
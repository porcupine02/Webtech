<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab7/2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 100px;
            font-family: 'Montserrat', sans-serif;
            background-color: #EDE7F6;
        }

        h1 {
            color: #99c;
            text-align: center;
        }

        table,
        th {
            font-size: larger;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        th {
            padding: 10px;
            background-color: #CE93D8;
        }

        td {
            font-weight: 700;
            padding: 20px;
            background-color: #ccf;
            width: 80px;
        }
    </style>
</head>

<body>
    <h1>August 2022 Calendar</h1>
    <table>
        <tr>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tueday</th>
            <th>Wednesday</th>
            <th>Thurday</th>
            <th>Firday</th>
            <th>Suturday</th>
        </tr>
        <tr>
            <td></td>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<td> $i </td>";
                if ($i % 7 == 6) {
                    echo "</tr><tr>";
                }
            }
            ?>
    </table>

</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data</title>
</head>

<body>
    <?php

    $fname = $_GET['fname']; //fname is id in html code
    $lname = $_GET['lname']; //lname is id in html code
    // get and post ต่างกันที่ path bar
    echo "<h1>Hello $fname $lname </h1>";
    ?>
    <a href="index.html">back</a>

</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <form action="" method="POST">
        <label for="prodname">Name :</label>
        <input type="text" id="prodname" name="prodname" placeholder="Enter Product Name" required />
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) // จะทำงานเมื่อกดปุ่ม submit แล้วเท่านั้น
    {
        $prodname = $_POST['prodname'];
        $url = "http://10.0.15.20/lab8/restapis/rest/api.php?prodname=" . $prodname;

        // เรียกใช้ webservice
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client); // เป้นtextยังใช้งานไม่ได้
        $result = json_decode($response); //แปลงค่าให้ใช้ได้
        echo  $result->name . " " . $result->price . " THB";
    }
    ?>



</body>

</html>
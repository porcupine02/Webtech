<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nigga.css">
    <title>Nigga 2.0.5</title>
</head>

<body>
    <div class="topic">
        <h2>การใช้ PHP เบื้องต้น</h2>
    </div>

    <?php
    // Data type
    $arr = array(0, 5, 12, 5.5, "Hello");
    $obj = array("name" => "Nigga", "age" => 25, "city" => "New York");
    $my_str = "Hello";
    $my_float = 12.543;
    $my_int = 15;

    // การลูป Array
    for ($i = 0; $i < count($arr); $i++) {
        print_r($arr[$i]); // การใช้ print_r สามาถใช้เพื่อแสดงค่า Array ได้
        echo "<br>";
    }

    // หรือแบบ foreach loop

    foreach ($arr as $val) {
        echo $val . "<br>";
    }

    echo "<hr/>";

    // การแสดงค่า Array เพื่อดูผลลัพธ์ JSON
    print_r(array("asd", 234)); // Array ( [0] => asd [1] => 234 )
    echo "<br/>";
    // หรือ
    var_dump(array("asd", 234)); // array(2) { [0]=> string(3) "asd" [1]=> int(234) }
    // หรือใช้ <pre>  </pre> ในกการหเปิดปิดเพื่อแสดงผลให้สวยงาม

    echo "<hr/>";

    // การลูป Object
    foreach ($obj as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    echo "<hr/>";

    ?>

    <div class="topic">
        <h2>การ Fetch API</h2>
    </div>

    <?php
    /*
         ในการดึง API มี 2 วิธี 
         1. ใช้ CURL
         2. ใช้ file_get_contents <- แนะนำแบบนี้ แต่ว่า CURL มันสามารถใช้ได้หลากหลายมันไม่จำเป็นต้องเรียกแค่ API ที่เป็น HTTP
    */

    // $url = "https://random-data-api.com/api/v2/users";
    $url = "http://10.0.15.20/lab8/restapis/superheroes";

    // --------------------------------------------------------- แบบที่ 1 --------------------------------------------------------- 
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    $result = (array) json_decode($response); // !-- สำคัญ --! การแปลง Object เป็น Array อันนี้ในคู่มืออาจารย์ไม่มีเป็นการ casting ถ้าหากว่ามัน return มาเป็น stdClass

    echo "<pre>";
    print_r($result);
    // ถ้าเราทำ casting แล้ว เราเข้าถึงข้อมูลแบบนี้ได้ $result["formed"] ถ้าเราไม่ทำ เราต้อง print_r($result->formed)
    // ลองเอา (array) ออกแล้วทดสอบดู

    echo "</pre>";

    // --------------------------------------------------------- แบบที่ 2 --------------------------------------------------------- 
    echo "<hr/>";

    $response = file_get_contents($url); // file_get_contents ใช้ในการเรียก json ได้ง่ายมาก! และ รองรับ HTTP Request ด้วย
    $result =   json_decode($response);

    echo "<pre>";
    print_r($result);
    print_r($result->formed); // เมื่อเราไม่ทำ casting แล้วต้องทำแบบนี้ ซึ่งก็ไม่ผิด
    echo "</pre>";

    ?>
</body>

</html>
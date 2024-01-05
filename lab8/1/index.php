<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/1</title>
</head>

<body>
    <?php
    $ans = 0;
    $ans1 = "";
    if (isset($_POST['convert'])) {

        $url = "http://10.0.15.20/lab8/restapis/currencyrate";
        $response = file_get_contents($url);
        $result = json_decode($response);

        $seletf = $_POST['from'];
        $selett = $_POST['too'];
        $varf = $_POST['fcount'];

        foreach ($result->rates as $country => $rate) {
            if ($seletf == $country) {
                $num1 = $rate;
            }

            if ($selett == $country) {
                $num2 = $rate;
            }
        }
        $ans = sprintf("%.2f", ($varf / $num1) * $num2);
        $ans1 = $varf;
    }


    ?>

    <h3>Currency Converter</h3>
    <form method="POST">
        <label>From :</label>
        <select name="from" id="from">
            <option value="THB" <?php if (isset($_POST['convert'])) {if ($_POST['from'] == "THB") echo "selected";}?>>THB</option>
            <option value="JPY" <?php if (isset($_POST['convert'])) {if ($_POST['from'] == "JPY") echo "selected";}?>>JPY</option>
            <option value="CNY" <?php if (isset($_POST['convert'])) {if ($_POST['from'] == "CNY") echo "selected";}?>>CNY</option>
            <option value="SGD" <?php if (isset($_POST['convert'])) {if ($_POST['from'] == "SGD") echo "selected";}?>>SGD</option>
            <option value="USD" <?php if (isset($_POST['convert'])) {if ($_POST['from'] == "USD") echo "selected";}?>>USD</option>
        </select>

        <input type="text" id="fcount" name="fcount" placeholder="Enter number" value="<?php echo $ans1; ?>" required />
        <br>
        <label>To :</label>
        <select name="too" id="too">
            <option value="THB" <?php if (isset($_POST['convert'])) {if ($_POST['too'] == "THB") echo "selected";}?>>THB</option>
            <option value="JPY" <?php if (isset($_POST['convert'])) {if ($_POST['too'] == "JPY") echo "selected";}?>>JPY</option>
            <option value="CNY" <?php if (isset($_POST['convert'])) {if ($_POST['too'] == "CNY") echo "selected";}?>>CNY</option>
            <option value="SGD" <?php if (isset($_POST['convert'])) {if ($_POST['too'] == "SGD") echo "selected";}?>>SGD</option>
            <option value="USD" <?php if (isset($_POST['convert'])) {if ($_POST['too'] == "USD") echo "selected";}?>>USD</option>
        </select>
        <input type="text" id="tcount" name="tcount" value=<?php echo $ans; ?> />
        <br><br>
        <button type="submit" name="convert">convert</button>
    </form>


</body>

</html>
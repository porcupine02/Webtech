<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab7/3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    .red-message{
        color: red;
    }
    body{
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }
</style>
<?php
    $nameErr=$addressErr=$ageErr="";
    $pppErr=$resErr="";
    $Name=$Address=$Age="";
    $ppp=$res= "";


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(strlen($_POST['Name']) > 4)
            {
                $Name = $_POST['Name'];
            }
        else
            {
                $nameErr ="Enter correct pattern";
            }
        if(strlen($_POST['Address']) > 4)
            {
                $Address = $_POST['Address'];
            }
        else
            {
                $addressErr="Enter correct message";
            }
        if(strlen($_POST['Age']) > 4)
            {
                $Age = $_POST['Age'];
            }
        else
            {
                $ageErr="Enter correct message";
            }

        if(strlen($_POST['ppp']) > 4)
        {
            $ppp = $_POST['ppp'];
        }
        else
        {
            $pppErr = "Enter correct message";
        }

        if(empty($_POST['folk']) && empty($_POST['folk']))
        {
            $resErr = "Enter your button";
        }
        else
        {
            $res = $_POST['folk'];
        }


    }
?>
<body>
    <form auto_complete="off" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div>
            <label for="name">Name:</label><br>
            <input type="text" id="Name" name="Name">
            <span class="red-message"><?php echo $nameErr;?></span>
        </div>
        <br>
        <div>
            <label for="address">Address:</label><br>
            <textarea cols="30" rows="4" id="Address" name="Address"></textarea>
            <span class="red-message"><?php echo $addressErr;?></span>
        </div>

        <br>

        <div>
            <label for="age">Age:</label><br>
            <input type="text" id="Age" name="Age">
            <span class="red-message"><?php echo $ageErr;?></span>
        </div>
        <br>

        <div>
            <label for="">Proffesion:</label><br>
            <input type="text" id="ppp" name="ppp">
            <span class="red-message"><?php echo $pppErr ?></span>
        </div>


        <br>

        <div>
            <label for="">Residential status:</label><br>
            <input type="radio" name="folk" value="Resident">
            <label for="">Resident</label>
            <input type="radio" name="folk"  value="Non-Resident">
            <label for="">Non-Resident</label>
            <span class="red-message"><?php echo $resErr?></span>
        </div>
        <br>
        <button type="submit" name="Submit" id="Submit">Submit</button>

        <?php
        echo '<br>'.'<br>';
        echo "Name: " . $Name . '<br>';
        echo "Address: ". $Address .'<br>';
        echo "Age: " . $Age .'<br>';
        echo "Proffesion: ". $ppp . '<br>';
        echo "Residential status: " . $res;
        ?>
    </form>


</body>
</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab8/3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        * {
            margin: 10px;
        }

        .card {
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
            padding: 1%;
            padding-top: 1%;
            box-shadow: 10px 5px 10px #ccc;
        }

        img {
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }

        h4 {
            color: #42A5F5;
            margin-top: 5px;
            margin-left: auto;
            margin-right: auto;
        }

        .intract {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            line-clamp: 4;
            -webkit-box-orient: vertical;
        }

        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $response = file_get_contents($url);
    $result = json_decode($response);
    foreach ($result->meals as $meal) {
        $menu = $meal->strMeal;
        $instraction = $meal->strInstructions;
        $img = $meal->strMealThumb;
        $link = $meal->strSource;
    }
    ?>
    <div class="card">
        <img src="<?php echo $img ?>">
        <h4><?php echo $menu; ?></h4>
        <hr>
        <p class="intract">
            <?php
            echo $instraction;
            ?>
        </p>
        <p>
            <a href="index.php">
                <i class="material-icons">&#xe5d5;</i>
            </a>
            <a href="<?php echo $link; ?>" target="_blank">
                <button type="button" class="btn btn-primary">Learn More</button>
            </a>
        </p>

    </div>

</body>

</html>
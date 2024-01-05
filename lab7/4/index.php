<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab7/4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <style>
        *{
            margin: 0;
        }
        .picture {
            width: 100%;
        }

        img {
            border-radius: 20px;
            margin: 5px;
        }

        .row {
            margin-left: auto;
            margin-right: auto;
            display: grid;
            grid-gap: 5px;
            grid-template-columns: 25% 25% 25% 25%;
        }
        .con{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 90%;
        }
        h3{
            font-size: 8vh;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <div class="con">
        <h3>Gallery</h3>
        <?php
        $img = array(
            "https://cdn.pixabay.com/photo/2015/04/19/08/33/flower-729512__340.jpg",
            "https://images.pexels.com/photos/736230/pexels-photo-736230.jpeg?cs=srgb&dl=pexels-jonas-kakaroto-736230.jpg&fm=jpg",
            "https://images.pexels.com/photos/60597/dahlia-red-blossom-bloom-60597.jpeg",
            "https://images.unsplash.com/photo-1530092285049-1c42085fd395?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmF0dXJlJTIwZmxvd2VyfGVufDB8fDB8fA%3D%3D&w=1000&q=80",
            "https://thumbs.dreamstime.com/b/aster-flowers-art-design-26968847.jpg",
            "https://st.depositphotos.com/1001051/1870/i/600/depositphotos_18700423-stock-photo-the-field-blooming-colorful-garden.jpg",
            "https://images.unsplash.com/photo-1600703136783-bdb5ea365239?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVkJTIwZmxvd2VyfGVufDB8fDB8fA%3D%3D&w=1000&q=80",
            "https://thumbs.dreamstime.com/b/flowers-4929984.jpg",
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-tulips-blooming-in-field-royalty-free-image-1584131603.jpg",
            "https://cdn.britannica.com/84/73184-004-E5A450B5/Sunflower-field-Fargo-North-Dakota.jpg",
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/surprising-flower-meanings-balloon-flowers-1650767465.jpg",
            "https://www.thoughtco.com/thmb/U3uVJMsgzLd00DbkIicnnIYM_kM=/1414x1414/smart/filters:no_upscale()/lotus-flower-828457262-5c6334b646e0fb0001dcd75a.jpg",
            "https://www.lovingly.com/wp-content/uploads/2019/09/red-rose-on-black-background-649x1024.jpg",
            "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Leucanthemum_vulgare_%27Filigran%27_Flower_2200px.jpg/1126px-Leucanthemum_vulgare_%27Filigran%27_Flower_2200px.jpg",
            "https://i.pinimg.com/originals/36/0d/09/360d09827c07d61565a36e504d54a86d.jpg","https://www.gardeningknowhow.com/wp-content/uploads/2019/08/flower-color.jpg",
            "https://i.pinimg.com/736x/d6/b2/e6/d6b2e65e9b2cac475a6472be3bf6fc88.jpg",
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/red-flowers-1659044733.jpeg",
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/surprising-flower-meanings-blanket-flower-1650768520.jpg?crop=0.502xw:1.00xh;0.333xw,0&resize=480:*",
            "https://news.cgtn.com/news/2020-09-20/Spider-flower-The-flower-with-a-distinctive-display-TVYLozFKg0/img/9c42156e261a4d2282370c03fce43a0a/9c42156e261a4d2282370c03fce43a0a.jpeg",
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/wisteria-in-bloom-royalty-free-image-1653423554.jpg?crop=0.685xw:1.00xh;0.112xw,0&resize=480:*",
            "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/spring-flowers-1613759017.jpg?crop=0.669xw:1.00xh;0.0635xw,0&resize=640:*",
            "https://addons-media.operacdn.com/media/CACHE/images/themes/95/78195/1.0-rev1/images/f1b54fe9-e138-44e6-929b-182bb1e82a68/8b7b9410c460548223847494208085d9.jpg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3TulvKSjOUa9X94z49KkElcm9K4VBPVZfeg&usqp=CAU"
            );
        echo "<div class='row'>";
        echo "<div class='col'>";
        $count = 1;
        foreach ($img as $i) {
            echo "<img src='$i' class='picture'>";
            if ($count % 6 == 0) {
                echo "</div><div class='col'>";
            }
            $count++;
        }
        echo "</div>";

        ?>

    </div>
</body>

</html>
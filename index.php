<?php

require_once __DIR__ . '/Model/Production.php';

require_once __DIR__ . '/Model/Movie.php';

require_once __DIR__ . '/Model/Media.php';

require_once __DIR__ . '/db/db.php';

//var_dump($movies);

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <title>Movie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">
</head>

<body class=" bg-dark ">

    <h1 class="title text-center m-5 text-light ">Lista Films</h1>

    <div class="container d-flex flex-wrap  mt-5">


        <?php //foreach ($movies as $movie) : ?>

            <div class="card m-5 " style="width: 18rem;">
                <img src="img/<?php //echo $movie->image?->fileName ?? 'TPM.jpg' ?>" class="card-img-top" alt="<?php //$movie->image?->title ?? '' ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php //echo $movie->title ?></h5>
                    <p class="card-text"><?php //echo implode(', ', $movie->type) ?></p>
                    <p class="card-text"><?php //echo $movie->nationality ?></p>
                    <p class="card-text"><?php //echo $movie->description ?></p>
                </div>
            </div>

        <?php //endforeach; ?>

    </div>

</body>

</html>
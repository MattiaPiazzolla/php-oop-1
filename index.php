<?php 
// Inclusione dei modelli
include './class/Movie.php';

// definisco le istanze di MovieInfo
$info_Interstellar = new MovieInfo(
    'Set in a dystopian future where Earth is suffering from catastrophic blight and famine, the film follows a group of astronauts who travel through a wormhole near Saturn in search of a new home for mankind. Syncopy Inc.',
    ['Sci-fi', 'Adventure'],
     '2014',
     'Christopher Nolan');

$info_ToyStory = new MovieInfo(
    'A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy\'s room.',
    ['Animation', 'Adventure', 'Comedy'],
    '1995',
    'John Lasseter'
);

$info_Godfather = new MovieInfo(
    'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
    ['Crime', 'Drama'],
    '1972',
    'Francis Ford Coppola'
);


// definisco le istanze di movie 
$interstellar = new Movie(
    "Interstellar",
    "https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg",
    $info_Interstellar
);
$godfather = new Movie(
    "The Godfather",
    "https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg",
    $info_Godfather
);

$toyStory = new Movie(
    "Toy Story",
    "https://m.media-amazon.com/images/M/MV5BMDU2ZWJlMjktMTRhMy00ZTA5LWEzNDgtYmNmZTEwZTViZWJkXkEyXkFqcGdeQXVyNDQ2OTk4MzI@._V1_.jpg",
    $info_ToyStory
);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop-Movie</title>
</head>

<body>
    <header>
        <div class="container-fluid p-3 z-2 mb-5 bg-dark text-light">
            <h1 class="text-center">Movie</h1>
        </div>
    </header>
    <div class="container mb-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card">
                    <img src="<?php echo $interstellar->cover ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $interstellar->title ?></h5>
                        <p class="card-text">
                            <a href="" class=" text-decoration-none text-dark">

                                <?php echo implode(' / ', $interstellar->info->genre) ?>
                            </a>
                        </p>
                        <p class="card-text">
                            <?php echo $interstellar->info->description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $interstellar->info->year ?>
                        </p>
                        <p class="card-text">
                            <a href="" class=" text-decoration-none text-dark fw-bold">
                                <?php echo $interstellar->info->director ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $godfather->cover ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $godfather->title ?></h5>
                        <p class="card-text">
                            <a href="" class=" text-decoration-none text-dark">

                                <?php echo implode(' / ', $godfather->info->genre) ?>
                            </a>
                        </p>
                        <p class="card-text">
                            <?php echo $godfather->info->description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $godfather->info->year ?>
                        </p>
                        <p class="card-text">
                            <a href="" class=" text-decoration-none text-dark fw-bold">
                                <?php echo $godfather->info->director ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $toyStory->cover ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $toyStory->title ?></h5>
                        <p class="card-text">
                            <a href="" class=" text-decoration-none text-dark">

                                <?php echo implode(' / ', $toyStory->info->genre) ?>
                            </a>
                        </p>
                        <p class="card-text">
                            <?php echo $toyStory->info->description ?>
                        </p>
                        <p class="card-text">
                            <?php echo $toyStory->info->year ?>
                        </p>
                        <p class="card-text">
                            <a href="" class=" text-decoration-none text-dark fw-bold">
                                <?php echo $toyStory->info->director ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
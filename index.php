<?php
//includo i file delle classi
include './models/ClassMovie.php';
include './models/ClassInMovie/cast.php';

//Creazioni istanza nella classe MOVIE
$Metro2033 = new Movie("Metro2033", 8.5, "horror", "descript", 120, "english", new cast('regista', 'attori', 'audio', 'video'));

//Istanzio un nuovo Movie,
$NewWorldDown = new Movie("NewWorldDown", 7.9, "paranormale", "descript", 70, "japanese", new cast('regista1', 'attori1', 'audio1', 'video1'));

//Istanzio un nuovo Movie,
$GimBro = new Movie("GimBro", 5.4, "comico", "descript", 80, "english", new cast('regista2', 'attori2', 'audio2', 'video2'));

//Cambio lingua al film 
$Metro2033->language = "italiano";
//Cambio anno al film 
$NewWorldDown->year = 2057;

$movies = [
    $Metro2033,
    $NewWorldDown,
    $GimBro
];

// echo print_r($Metro2033) . '<br> <br> <br>';
// echo var_dump($NewWorldDown) . '<br> <br> <br>';
// echo var_dump($GimBro);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviePhp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container justify-content-center">
        <div class="row">
            <div class="col-12">
                <h1>MovieList</h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">title</th>
                            <th scope="col">vote</th>
                            <th scope="col">type</th>
                            <th scope="col">description</th>
                            <th scope="col">duration</th>
                            <th scope="col">language</th>
                            <th scope="col">subtitle</th>
                            <th scope="col">cast</th>
                            <th scope="col">register</th>
                            <th scope="col">year</th>
                            <th scope="col">new</th>
                            <th scope="col">productionHouse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($movies as $movie) { ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $movie->title ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->vote ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->type ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->description ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->duration ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->language ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->subtitle ?>
                                </th>
                                <th scope="row" class="d-flex flex-column">
                                    <p>
                                        <?php echo $movie->cast->register ?>
                                    </p>
                                    <p>
                                        <?php echo $movie->cast->actors ?>
                                    </p>
                                    <p>
                                        <?php echo $movie->cast->audio ?>
                                    </p>
                                    <p>
                                        <?php echo $movie->cast->video ?>
                                    </p>

                                </th>
                                <th scope="row">
                                    <?php echo $movie->register ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->year ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->new ?>
                                </th>
                                <th scope="row">
                                    <?php echo $movie->productionHouse ?>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
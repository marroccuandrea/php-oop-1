<?php

require_once __DIR__ . "/Model/Movie.php";

$spiderman = new Movie('Spiderman', 'Fantascienza', 2002, 'Sam Raimi');
$superman = new Movie('Superman', 'Fantastico', 2013, 'Zack Snider');
$venom = new Movie('Venom', 'Fantascienza', 2018, 'Ruben Fleischer');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP OOP 1</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">Lista Film + Info</h1>
        <div class="container m-5">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $spiderman->getFullName() ?></h4>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Anno: <?php echo $spiderman->getFullYear() ?></h6>
                            <p class="card-text">Genere: <?php echo $spiderman->getFullGenre() ?></p>
                            <p class="card-text">Regista: <?php echo $spiderman->getFullDirector() ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $superman->getFullName() ?></h4>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Anno: <?php echo $superman->getFullYear() ?></h6>
                            <p class="card-text">Genere: <?php echo $superman->getFullGenre() ?></p>
                            <p class="card-text">Regista: <?php echo $superman->getFullDirector() ?></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $venom->getFullName() ?></h4>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Anno: <?php echo $venom->getFullYear() ?></h6>
                            <p class="card-text">Genere: <?php echo $venom->getFullGenre() ?></p>
                            <p class="card-text">Regista: <?php echo $venom->getFullDirector() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
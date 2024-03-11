<?php
include_once __DIR__ . '/modals/Products.php';
include_once __DIR__ . '/modals/Kennel.php';
include_once __DIR__ . '/modals/Food.php';
include_once __DIR__ . '/modals/Toy.php';

$kennel1 = new Kennel("dog", "Kennel", "Comfy Kennel", "https://arcaplanet.vtexassets.com/arquivos/ids/281216-200-200/scottish-nera-60-80.jpg?v=638126689382230000", 24.99, "King");

$food1 = new Food("cat", "Food", "Delicious Cat Food", "https://www.b2x.it/rest/images/2023/07/13/1464765.jpg?imageFormat=@1x", 19.99, 150);

$toy1 = new Toy("dog", "Toy", "Interactive Dog Toy", "https://arcaplanet.vtexassets.com/arquivos/ids/218063-200-200/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000", 14.99, "Peluche Toy");

$toy2 = new Toy("dog", "Toy", "Interactive Dog Toy", "https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000", 14.99, "Toy");

$kennel1->setDiscount("word", "€");
$food1->setDiscount(10, "%");
$toy1->setDiscount(8.70,"€");

$products = [
    $kennel1, 
    $food1, 
    $toy1, 
    $toy2
];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

    <!-- link to bs css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link to fa css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <header class="p-5">
        <h1 class="fw-bolder">My Pet Shop</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, doloribus odio sequi officiis laborum ut, ratione necessitatibus quo, enim ipsum expedita! Possimus laudantium quod, nulla laboriosam nobis id cum repellendus.
        </p>
        <button class="btn btn-primary">Example Button</button>
    </header>

    <main class="container pb-5">

        <div class="row justify-content-center gap-3">

            <?php foreach ($products as $element) : ?>
                <div class="card p-0 position-relative" style="width: 18rem;">
                    <i class="fa-solid fa-<?= $element->getCategory() ?> position-absolute top-0 end-0 m-2 bg-dark rounded-circle p-1"></i>
                    <img src="<?= $element->getImg() ?>" class="card-img-top w-100" alt="title" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $element->getName() ?></h5>
                        <small>Type: <?= $element->getType() ?></small>
                        <h6>Price: €<?= $element->getPrice() ?></h6>
                        <hr>

                        <?php if (method_exists($element, 'getSize')) { ?>
                            <small>Size: <?= $element->getSize() ?></small>
                        <?php } ?>

                        <?php if (method_exists($element, 'getCalories')) { ?>
                            <small>Calories: <?= $element->getCalories() ?></small>
                        <?php } ?>

                        <?php if (method_exists($element, 'getGenre')) { ?>
                            <small>Genre: <?= $element->getGenre() ?></small>
                        <?php } ?>

                        <hr>

                        <?php if (method_exists($element, 'setDiscount')) { ?>
                            <small><?= $element->getDiscount()?></small>
                        <?php } ?>

                        <a href="#" class="btn btn-primary d-block mt-3">BUY</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </main>

    <!-- link to bs js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
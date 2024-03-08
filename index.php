<?php
include __DIR__ .'/modals/Products.php';

$products = [
    $kennel = new Product("dog", "Kennel", "Comfy Kennel", "https://arcaplanet.vtexassets.com/arquivos/ids/281216-200-200/scottish-nera-60-80.jpg?v=638126689382230000", 24.99),
    $food = new Product("cat", "Food", "Delicious Cat Food", "https://www.b2x.it/rest/images/2023/07/13/1464765.jpg?imageFormat=@1x", 19.99),
    $toy = new Product("dog", "Toy", "Interactive Dog Toy", "https://arcaplanet.vtexassets.com/arquivos/ids/218063-200-200/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000", 14.99),
    $toy = new Product("cat", "Toy","Soft Cat Toy", "https://arcaplanet.vtexassets.com/arquivos/ids/273114-200-200/LOVEDI-GIOCO-GATTO-CANNA-DA-PESCA-CON-PESCE-CM.42.jpg?v=637921027967030000", 9.99),
    $kennel1 = new Product("dog", "Kennel", "Comfy Kennel", "https://arcaplanet.vtexassets.com/arquivos/ids/281216-200-200/scottish-nera-60-80.jpg?v=638126689382230000", 24.99),
    $food1 = new Product("cat", "Food", "Delicious Cat Food", "https://www.b2x.it/rest/images/2023/07/13/1464765.jpg?imageFormat=@1x", 19.99),
    $toy1 = new Product("dog", "Toy", "Interactive Dog Toy", "https://arcaplanet.vtexassets.com/arquivos/ids/218063-200-200/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000", 14.99),
    $toy1 = new Product("cat", "Toy","Soft Cat Toy", "https://arcaplanet.vtexassets.com/arquivos/ids/273114-200-200/LOVEDI-GIOCO-GATTO-CANNA-DA-PESCA-CON-PESCE-CM.42.jpg?v=637921027967030000", 9.99),
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

    <main class="container">

        <div class="row justify-content-center gap-3" >

            <?php foreach($products as $element): ?>
            <div class="card p-0 position-relative" style="width: 18rem;">
                <i class="fa-solid fa-<?= $element->category?> position-absolute top-0 end-0 m-2 bg-dark rounded-circle p-1"></i>
                <img src="<?= $element->getImg()?>" class="card-img-top w-100" alt="title" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $element->name ?></h5>
                    <small>Type: <?= $element->type ?></small>
                    <h6>Price: €<?= $element->getPrice() ?></h6>
                    <a href="#" class="btn btn-primary">BUY</a>
                </div>
            </div>
            <?php endforeach; ?>

            

        </div>

    </main>

    <!-- link to bs js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
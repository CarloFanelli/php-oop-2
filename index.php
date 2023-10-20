<?php
require __DIR__  . '/Models/Product.php';
require __DIR__  . '/Models/Food.php';
require __DIR__  . '/Models/Toy.php';
require __DIR__  . '/Models/Kennel.php';



$crocchette = new Product('crocchette', 60, 'Cani');

$biscotti = new Food('biscotti', 60, 'Gatti', 45);

$rana = new Toy('rana gomma', 44, 'Cani', 'gomma');

$trasportino = new Kennel('cuccia comoda', 100, 'gatti', 50, 40, 20);

?>

<?php include './partials/header.php'; ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?= $crocchette->product_name; ?></h2>
                <h2><?= $crocchette->product_cat; ?></h2>
                <h2><?= $crocchette->product_price; ?> €</h2>
            </div>
            <div class="col">
                <h2><?= $biscotti->product_name; ?></h2>
                <h2><?= $biscotti->product_cat; ?></h2>
                <h2><?= $biscotti->product_price; ?> €</h2>
                <h2><?= $biscotti->getDetails(); ?></h2>
            </div>
            <div class="col">
                <h2><?= $rana->product_name; ?></h2>
                <h2><?= $rana->product_cat; ?></h2>
                <h2><?= $rana->product_price; ?> €</h2>
                <h2><?= $rana->getDetails(); ?></h2>
            </div>
            <div class="col">
                <h2><?= $trasportino->product_name; ?></h2>
                <h2><?= $trasportino->product_cat; ?></h2>
                <h2><?= $trasportino->product_price; ?> €</h2>
                <h2><?= $trasportino->getDetails(); ?></h2>
            </div>
        </div>
    </div>
</main>
<?php include './partials/footer.php'; ?>
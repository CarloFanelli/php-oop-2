<?php
require __DIR__  . '/Models/Product.php';
$cibo = new Product('crocchette', 60, 'Cani');
?>

<?php include './partials/header.php'; ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?= $cibo->product_name; ?></h2>
                <h2><?= $cibo->product_cat; ?></h2>
                <h2><?= $cibo->product_price; ?> €</h2>
            </div>
        </div>
    </div>
</main>
<?php include './partials/footer.php'; ?>
<?php
require __DIR__  . '/Models/Product.php';
require __DIR__  . '/Models/Food.php';
require __DIR__  . '/Models/Toy.php';
require __DIR__  . '/Models/Kennel.php';
require __DIR__  . '/Models/Category.php';


require __DIR__  . '/db.php';


?>

<?php include './partials/header.php'; ?>
<main>
    <div class="container">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col">
                    <div class="card">
                        <h2><?= $prodotto->product_name; ?></h2>

                    </div>
                    <h2><?= $prodotto->product_price; ?> €</h2>
                    <img class="img-fluid" src="<?= $prodotto->product_img ?>" alt="xx">
                    <h2><?= $prodotto->getDetails(); ?></h2>
                    <h2><?= $prodotto->product_cat->getIconCat(); ?></h2>
                    <h2><?= get_class($prodotto) ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include './partials/footer.php'; ?>
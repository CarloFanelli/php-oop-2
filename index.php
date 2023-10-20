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
        <div class="row my-4">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-6 col-md-4 my-3">
                    <div class="card h-100">
                        <div class="card-header d-flex flex-column justify-content-between bg-success text-white h-25">
                            <h4 class="text-uppercase"><?= $prodotto->product_name; ?></h4>
                            <span><?= get_class($prodotto) ?></span>
                        </div>
                        <div class="card-body text-center h-50">
                            <img class="h-75 img-fluid" src="<?= $prodotto->product_img ?>" alt="xx">
                            <p class="mt-3"><?= $prodotto->getDetails(); ?></p>
                        </div>
                        <div class="card-footer h-25 d-flex justify-content-between align-items-center">

                            <h2 class="text-success"><?= $prodotto->product_price; ?> €</h2>
                            <span><?= $prodotto->product_cat->getIconCat(); ?></span>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include './partials/footer.php'; ?>
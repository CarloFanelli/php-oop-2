<?php

$prodotti = [];

try {
    array_push(
        $prodotti,

        $biscotti = new Food('biscotti lusso', 60, new Category('Gatti'), "https://unsplash.it/300/300?image=12", 45),

        $rana = new Toy('rana gomma', 44, new Category('Cani'), "https://unsplash.it/300/300?image=20", 'gomma'),

        $trasportino = new Kennel('trasportino', 100, new Category('gatti'), "https://unsplash.it/300/300?image=44", 50, 40, 20),

        $palla_oro = new Toy('palla dorata', null, new Category('cani'), "https://unsplash.it/300/300?image=242", 'oro'),

        $crocchette = new Food('crocchette per gatti', 33, new Category('gatti'), "https://unsplash.it/300/300?image=142", 100),

        $palla = new Toy('palla per gioco', 23, new Category('cani'), "https://unsplash.it/300/300?image=242", 'plastica'),

        $cuccia_cane = new Kennel('cuccia da casa', 19, new Category('cani'), "https://unsplash.it/300/300?image=344", 40, 20, 40)

        /* place here new product */
    );
} catch (Exception $ex) {
    echo $ex->getMessage();
}

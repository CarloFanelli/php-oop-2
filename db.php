<?php

$prodotti = [];

array_push(
    $prodotti,

    $biscotti = new Food('biscotti', 60, new Category('Gatti'), "https://unsplash.it/300/300?image=12", 45),

    $rana = new Toy('rana gomma', 44, new Category('Cani'), "https://unsplash.it/300/300?image=20", 'gomma'),

    $trasportino = new Kennel('cuccia comoda', 100, new Category('gatti'), "https://unsplash.it/300/300?image=44", 50, 40, 20),

    /* place here new product */
);

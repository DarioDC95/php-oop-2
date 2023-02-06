<?php
    include __DIR__. '/moduls.php/headProducts.php';
    include __DIR__. '/moduls.php/accessory.php';
    include __DIR__. '/moduls.php/food/foodProducts.php';
    include __DIR__. '/moduls.php/gameProducts.php';

    // CIBO
    $foodDog1 = new foodProducts('https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg?v=1762095507', 'Royal Canin Mini Adult', 'Cane', '€ 43.99', '545g', new ingredients (array('prosciutto', 'riso')));

    $foodDog2 = new foodProducts('https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/741_EXE_12KG_DOG-500x500.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', '€ 44.99', '600g', new ingredients (array('manzo', 'cereali')));

    $foodCat1 = new foodProducts('https://egress.storeden.net/gallery/6061da645fb8e092b0ea7e0c/file.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', '€ 34.99', '400g', new ingredients (array('tonno', 'pollo', 'prosciutto')));

    $foodFish1 = new foodProducts('https://m.media-amazon.com/images/I/81A1J1l2kqL._AC_SY879_.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', '€ 2.95', '30g', new ingredients (array('Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe')));

    // ACCESSORI
    $accessoryBird = new accessory('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', 'Voliera Wilma in Legno', 'Uccello', '€ 184.99', 'Legno', 'M: L 83 x P 67 x H 153 cm');

    $accessoryFish = new accessory('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg?v=1762083756', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', '€ 2.29', 'Materiale espanso', 'ND');

    // GIOCHI
    $gameDog = new gameProducts('https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg', 'Kong Classic', 'Cane', '€ 13.49', 'Galleggia e rimblaza', '8.5 cm x 10 cm');

    $gameCat = new gameProducts('https://egress.storeden.net/gallery/602436385fb8e09ecd8b8984', 'Topini di peluche Trixie', 'Gatto', '€ 4.99', 'Morbido con codina in corda', '8.5 cm x 10 cm');

    $allProducts = array($foodDog1, $foodDog2, $foodCat1, $foodFish1, $accessoryBird, $accessoryFish, $gameDog, $gameCat);
?>
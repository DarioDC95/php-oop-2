<?php
    include __DIR__. '/database.php';

    echo '<pre>';
    var_dump($allProducts);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mycard">
                        <h1>Boolshop</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mycard">
                        <h2>I nostri prodotti</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 gy-4">
                <?php foreach($allProducts as $product) { ?>
                    <div class="col">
                        <div class="card h-100" style="overflow: hidden">
                            <div style="width: 100%; height: 500px; overflow: hidden" class="d-flex align-items-center justify-content-center">
                                <img class="w-100" src="<?php echo $product->image ?>" alt="img product">
                            </div>
                            <div class="card-body">
                                <h3><?php echo $product->title ?></h3>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-2"><?php echo $product->getCategoryIcon() ?></div>
                                    <div><?php echo $product->category ?></div>
                                </div>
                                <div>Prezzo: <?php echo $product->prize ?></div>
                                <div class="my-4">
                                    <?php 
                                        if(isset($product->weight)) {
                                            echo 'Peso netto: '.$product->weight;
                                        }
                                        elseif(isset($product->material)) {
                                            echo 'Materiale: '.$product->material;
                                        }
                                        else {
                                            echo 'Materiale: '.$product->characteristic;
                                        }
                                    ?>
                                </div>
                                <div class="my-4">
                                    <?php 
                                        if(isset($product->size)) {
                                            echo 'Dimensioni: '.$product->size;
                                        }
                                        else {
                                            echo 'Ingredienti: '.$product->getIngredients();
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>
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
</head>
<body>
    <header>
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
            <div class="row row-cols-3">
                <?php foreach($allProducts as $product) { ?>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $product->image ?>" alt="">
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>
<?php

    require_once __DIR__.'/classes/Category.php';
    require_once __DIR__.'/classes/Product.php';
    require_once __DIR__.'/classes/Toy.php';
    require_once __DIR__.'/classes/Food.php';
    require_once __DIR__.'/classes/PetBed.php';

    $dogsCategory = new Category('🐶');
    $catsCategory = new Category('🐱');

    $allProducts = [];

    try {
        $prodottoGenerico = new Product(
            'Osso Proteico',
            'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg',
            7.99,
            30,
            'Un bel Osso Proteico',
            $dogsCategory
        );
        $allProducts[] = $prodottoGenerico;
    }
    catch (Exception $e) {
        // Viene eseguito nel caso in cui si verifichi l'errore
        echo '<h4 style="color: red;">Valore quantità Osso Proteico non valido!</h4>';
    }
    try {
        $dogBed = new PetBed(
            'Cuccia per cani',
            '70',
            '70',
            'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg',
            7.99,
            30,
            'Un bella Cuccia per cani morbidissima e comodossima',
            $dogsCategory
        );
        $allProducts[] = $dogBed;
    }
    catch (Exception $e) {
        // Viene eseguito nel caso in cui si verifichi l'errore
        echo '<h4 style="color: red;">Valore quantità Cuccia per cani non valido!</h4>';
    }

    try{
        $frisbee = new Toy(
            'Frisbee',
            'Plastica',
            'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg',
            12.99,
            30,
            'Un bel Frisbee',
            $dogsCategory
        );
        $allProducts[] = $frisbee;
    }
    catch (Exception $e) {
        
        // Viene eseguito nel caso in cui si verifichi l'errore
        echo '<h4 style="color: red;">ERRORE: '.$e->getMessage().'</h4>';
    }

    try{
        $food = new Food(
            'Croccantini Gatto',
            '30/08/2024',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT51LPyNr2oTowJPt9r_YTTYxm-6qLl0hhfVmVZK35AXBjpkKKcz2fnu3n5rGUm8r4vF70&usqp=CAU',
            15.99,
            50,
            'Friskies la marca più popolare di croccantini secchi per gatto',
            $catsCategory
        );
        $allProducts[] = $food;
    }
    catch (Exception $e) {
        // Viene eseguito nel caso in cui si verifichi l'errore
        echo '<h4 style="color: red;">Valore quantità croccantini non valido!</h4>';
    }
    $food = new Toy(
        'Pallina',
        '20/03/2024',
        'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg',
        5.99,
        30,
        'Pallina da riporto',
        $dogsCategory
    );
    $allProducts[] = $food;
    $food = new Food(
        'Croccantini per cane',
        '20/03/2024',
        'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg',
        5.99,
        30,
        'Croccantini Purina One le migliori in circolazione',
        $dogsCategory
    );
    $allProducts[] = $food;
    $food = new Toy(
        'Tiragraffi',
        '20/03/2024',
        'https://www.repstatic.it/content/nazionale/img/2024/02/17/143814201-7f940fca-0619-41bb-817c-02f794e586d1.jpg',
        5.99,
        30,
        'Tiragraffi perfetto per il tuo gatto che distrugge tutti i divani',
        $catsCategory
    );
    $allProducts[] = $food;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP Shop</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>
                            PHP OOP Shop
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            Prodotti
                        </h2>
                    </div>
                    <?php
                        foreach ($allProducts as $singleProduct) {
                    ?>
                        <div class="col-3">
                            <div class="card">
                                <img src="<?php echo $singleProduct->image; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h3>
                                        <?php echo $singleProduct->getName(); ?>
                                    </h3>
                                    <ul>
                                        <li>
                                            Categoria: <?php echo $singleProduct->category->getName(); ?>
                                        </li>
                                        <li>
                                            € <?php echo $singleProduct->price; ?>
                                        </li>
                                        <li>
                                            Disponibili: <?php echo $singleProduct->quantity; ?>
                                        </li>
                                        <?php
                                            if (get_class($singleProduct) == 'Toy') {
                                        ?>
                                            <li>
                                                Materiale: <?php echo $singleProduct->material; ?>
                                            </li>
                                        <?php
                                            }
                                            else if (get_class($singleProduct) == 'Food') {
                                        ?>
                                            <li>
                                                Data di scadenza: <?php echo $singleProduct->expiration; ?>
                                            </li>
                                        <?php
                                            }
                                            else if (get_class($singleProduct) == 'PetBed'){
                                        ?>
                                            <li>
                                                Dimensioni: <?php echo $singleProduct->width; ?> x <?php echo $singleProduct->height; ?>
                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                    <p>
                                        <?php echo $singleProduct->description; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>
        
    </body>
</html>
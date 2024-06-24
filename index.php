<?php

include __DIR__ . '/models/Categoria.php';
include __DIR__ . '/models/Prodotto.php';
include __DIR__ . '/models/Cibo.php';
include __DIR__ . '/models/Gioco.php';
include __DIR__ . '/models/Cuccia.php';

$categoriaCani = new Categoria(1, "Cani");
$categoriaGatti = new Categoria(2, "Gatti");

$prodotti = [
    new Cibo(1, "Crocchette per cani", 20.99, "Alimento completo per cani adulti.", $categoriaCani),
    new Gioco(2, "Palla per gatti", 5.99, "Palla in corda, divertimento garantito.", $categoriaGatti),
    new Cuccia(3, "Cuccia per cani", 59.99, "Cuccia comoda per il riposo.", $categoriaCani)
];

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Animali</title>
</head>
<body>
    <h1>Prodotti per Animali</h1>
    <div>
        <?php foreach ($prodotti as $prodotto) {
            echo $prodotto->getDettagli();
        } ?>
    </div>
</body>
</html>
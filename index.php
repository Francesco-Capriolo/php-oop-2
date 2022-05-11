<?php 
/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). */

include_once __DIR__ . '/data/Product.php';
include_once __DIR__ . '/data/Food.php';
include_once __DIR__ . '/data/User.php';
include_once __DIR__ . '/data/CreditCard.php';

$biscotti= new Food('biscotti',12.3,"biscotti buonissimi","farina,acqua,uova","ottobre",3,5);
$croccantini= new Food('croccantini',12.3,"croccantini buonissimi","farina,acqua,uova","ottobre",2,2);


$giangi = new User('giangi','giungi','gigi','gigiani@gmail.com',new CreditCard(114141141414,2025,141,100),false);
$luigia = new User('luigia','ligia','lilla','lilliana@gmail.com',new CreditCard(114252562652,2020,141,50),true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    var_dump($biscotti);
    var_dump($giangi);
    var_dump($luigia);
    echo $giangi->getName();
    echo "<br>";
    echo "Disponibilità: " . $giangi->getDiscount();
    echo "<br>";
    echo $luigia->getName();
    echo "<br>";
    echo "Disponibilità: " . $luigia->getDiscount();
    ?>
</body>
</html>
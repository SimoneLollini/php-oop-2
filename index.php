<?php
/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
 */

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/ProductType.php';


$gioco1 = new Product('prodotto', 'descrizione', 'https://picsum.photos/200', new Category('cane'), new ProductType('gioco'));
$gioco1->set_weight(1, 'kg');

$cibo1 = new Product('Nome prodotto', 'descrizione', 'https://picsum.photos/200', new Category('gatto'), new ProductType('cibo'));
$cibo1->set_weight(300, 'gr');


$cuccia1 = new Product('Nome prodotto', 'descrizione', 'https://picsum.photos/200', new Category('cane'), new ProductType('cuccia'));
$cuccia1->set_weight(3, 'kg');

var_dump($gioco1);
var_dump($cibo1);
var_dump($cuccia1);

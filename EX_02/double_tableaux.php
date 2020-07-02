<?php
$panier= array(
    array('T-shirt rouge','15.50','5'),
    array('T-shirt vert','15.50','6'),
    array('T-shirt argent','15.50','8'),
    array('Short bleu','16.50','5'),
    array('Short vert','19.99','5'),
    array('Veste argent','19.99','10'),
    array('Veste argent','35','3')
);
function afficher_panier( $panier ){
    foreach($panier as $element){
        echo '<ul> </ul>';
        foreach ($element as $data)
        echo '<li>' .$data. '</li>'
        ;
    }
};
afficher_panier($panier);


calculer_total_panier($panier);
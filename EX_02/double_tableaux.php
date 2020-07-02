<?php
$panier= array(
    array('T-shirt rouge','15.50 euros','5'),
    array('T-shirt vert','15.50 euros','6'),
    array('T-shirt argent','15.50 euros','8'),
    array('Short bleu','16.50 euros ','5'),
    array('Short vert','19.99 euros','5'),
    array('Veste argent','19.99 euros','10'),
    array('Veste argent','35 euros','3'),
);
function afficher_panier( $panier ){
    foreach($panier as $element){
        echo '<ul> </ul>';
    foreach ($element as $data)
        echo '<li>' .$data. '</li>';
    }
};
afficher_panier($panier);


function calculer_total_panier( $panier ){
    $somme=0;
    foreach ($panier as $element){
        $somme= $element [1] * $element [2] + $somme; 
    };

    return ( $somme);

        };
        
echo calculer_total_panier($panier);
?>
<?php
include 'php/getBlock.php';


//Initializes the head of the document
getBlock('php/init_page.php');

//Get the navbar
getBlock('php/create_header.php', array(
    'class' => 'navHome'
));

//affiches
getBlock('php/infos-affiches.php', array(
    '0' => 'img/affiche_incassable.jpg',
    '1' => 'img/affiche_split.jpg',
    '2' => 'img/affiche_glass.jpg'
));

//film infos
getBlock('php/film_infos.php', array(
    'titre' => 'Split',
    'datetime' => '2017-02-22',
    'date' => '22 Fevrier 2017',
    'presse' => '37',
    'spectateurs' => '41'
));

//director infos

//actor infos

//Get the footer
getBlock('php/create_footer.php');
?>
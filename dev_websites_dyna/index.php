<?php
include 'php/getBlock.php';


getBlock('php/init_page.php');

getBlock('php/create_header.php', array(
    'class' => 'navHome'
));

getBlock('php/infos-affiches.php', array(
    '0' => 'incassable',
    '1' => 'split',
    '2' => 'glass'
));

getBlock('php/film_infos.php', array(
   'title' => 'Split'
));

getBlock('php/ppl_infos.php',array(
    'type'=>'director',
    'movie' => 'Split'
));

getBlock('php/ppl_infos.php',array(
    'type'=>'actor',
    'movie'=>'Split'
));

//getBlock('php/create_footer.php');
?>
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
getBlock('php/ppl_infos.php',array(
    'type'=>'director',
    'director'=>'M.N.S',
    'image'=>'img/director_M.N.S.jpg',
    'name'=>'M. Night Shyamalan'
));

//actor infos
getBlock('php/ppl_infos.php',array(
    'type'=>'actor',
    'actor'=>['J.McA', 'A.T.J', 'B.B','B.W.H','H.L.R','J.S','N.H','S.A'],
    'image'=>['img/actor_james-mcavoy.jpg','img/actor_anya-taylor-joy.jpg','img/actor_betty-buckley.jpg','img/actor_brad-william-henke.jpg','img/actor_haley-lu-richardson.jpg','img/actor_jessica-sula.jpg','img/actor_neal-huff.jpg','img/actor_sebastian-arcelus.jpg',],
    'name'=>['James McAvoy','Anya Taylor Joy','Betty Buckley','Brad William Henke','Haley Lu Richardson','Jessica Sula','Neal Huff','Sebastian Arcelus',]
));

//Get the footer
getBlock('php/create_footer.php');
?>
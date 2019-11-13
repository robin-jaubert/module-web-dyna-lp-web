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

//getBlock('php/ppl_infos.php',array(
//    'type'=>'director',
//    'director'=>'M.N.S',
//    'image'=>'img/director_M.N.S.jpg',
//    'name'=>'M. Night Shyamalan'
//));
//
//getBlock('php/ppl_infos.php',array(
//    'type'=>'actor',
//    'actor'=>['J.McA', 'A.T.J', 'B.B','B.W.H','H.L.R','J.S','N.H','S.A'],
//    'image'=>['img/actor_james-mcavoy.jpg','img/actor_anya-taylor-joy.jpg','img/actor_betty-buckley.jpg','img/actor_brad-william-henke.jpg','img/actor_haley-lu-richardson.jpg','img/actor_jessica-sula.jpg','img/actor_neal-huff.jpg','img/actor_sebastian-arcelus.jpg',],
//    'name'=>['James McAvoy','Anya Taylor Joy','Betty Buckley','Brad William Henke','Haley Lu Richardson','Jessica Sula','Neal Huff','Sebastian Arcelus',]
//));
//
//getBlock('php/create_footer.php');
?>
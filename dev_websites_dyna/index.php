<?php
include 'php/getBlock.php';


//Initializes the head of the document
getBlock('php/init_page.php');

//Get the navbar
getBlock('php/create_header.php', array('class' => 'navHome'));

//affiches
getBlock('php.infos-affiches.php');
//film infos

//director infos

//actor infos

//Get the footer
getBlock('php/create_footer.php');
?>
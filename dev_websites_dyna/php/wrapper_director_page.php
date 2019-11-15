<?php
include 'getBlock.php';


if(!function_exists('createDirectorPage')){
    function createDirectorPage($data){
        getBlock('init_Page.php');

        getBlock('create_header.php', array('class'=>$data['nav']));

    }
}
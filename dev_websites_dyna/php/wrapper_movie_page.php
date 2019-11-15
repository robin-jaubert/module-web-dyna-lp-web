<?php
include 'getBlock.php';

if(!function_exists('getAllTheInfos')){
    function getAllTheInfos($array){
        $infos = array();
        foreach ($array as $element){
            array_push($infos, $element);
        }
        return $infos;
    }
}

if (!function_exists('createMoviePage')){
    function createMoviePage($data=[])
    {
        getBlock('php/init_page.php');

        getBlock('php/create_header.php', array(
            'class' => $data['nav']
        ));

        getBlock('php/infos-affiches.php', getAllTheInfos($data['affiches']));

        getBlock('php/film_infos.php', array(
            'title' => $data['movie']
        ));

        getBlock('php/ppl_infos.php', array(
            'type' => 'director',
            'movie' => $data['movie']
        ));

        getBlock('php/ppl_infos.php', array(
            'type' => 'actor',
            'movie' => $data['movie']
        ));

        getBlock('php/create_footer.php');
    }
}
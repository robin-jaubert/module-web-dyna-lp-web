<?php
include_once 'pdo_helpers.php';


function movieInfo($data){
    $movie = $data['title'];
    $pdo= pdoCreate("mysql-jaubert.alwaysdata.net", "jaubert_web_dyna", "jaubert_web_dyna", "webdyna");
    $query = $pdo->prepare('Select title, synopsis, releaseDate, rating from jaubert_web_dyna.movie where title=\''.$movie.'\'');
    $query->execute();
    if ($query->rowCount() != 1){
        echo 'Film non trouvé';
        return null;
    }
    else{
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

$array = movieInfo($data);
$title = $array['title'];
$date =$array['releaseDate'];
$synopsis = $array['synopsis'];
$note = $array['rating'];

?>
<section>
    <h1>
        Informations sur le film
    </h1>
    <p>
        Titre : <?=$title?><br>
        Date de sortie : <?=$date?><br>
        Synopsis : <?=$synopsis?><br>
        Moyenne des notes sur Allocin&eacute : <label for="note"> Note sur 5 : </label> <meter id="note" min="0" max="50" value="<?=$note * 10?>" title="<?=$note?>/5"></meter>
    </p>
</section>
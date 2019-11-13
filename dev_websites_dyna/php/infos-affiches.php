<?php
include_once 'pdo_helpers.php';



function getPath($i, $data){
    return $data[$i];
}

function infosAffiches($i, $data){
    $path = getPath($i, $data);
    $pdo = pdoCreate('mysql-jaubert.alwaysdata.net','jaubert_web_dyna','jaubert_web_dyna','webdyna');
    $query = $pdo->prepare('SELECT path, legend FROM jaubert_web_dyna.picture p WHERE p.path=\'affiche_' .$path.'.jpg\'');
    $query->execute();
    if ($query->rowCount() != 1){
        echo 'Affiche non trouvée';
        return null;
    }
    else{
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

//['path'] chemin sans 'img/', ['legend'] ce qu'il y a sous l'image

?>

<section>
    <p>
        Le film Split s'incrit dans l'univers mis en place par le film Incassable en 2000. Avec ce dernier et le film Glass sorti en 2019, il forme une trilogie.
    </p>
    <aside class="actorFlex">
<?php
for ($i = 0; $i < 3; $i += 1){
    $result = infosAffiches($i, $data);
    $src = 'img/'.$result['path'];
    $figcaption = $result['legend'];
    $alt = substr($figcaption, 10);
    ?>
    <figure>
        <img src=<?=$src?> alt="affiche_<?=$alt?>">
        <figcaption><?=$figcaption?></figcaption>
    </figure>

<?php
}
?>
    </aside>
</section>
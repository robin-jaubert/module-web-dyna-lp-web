<?php
include_once 'pdo_helpers.php';


if (!function_exists('pplmovie')){
    function pplMovie($data){
        $role = $data['type'];
        $movie = $data['movie'];
        $pdo = pdoCreate('mysql-jaubert.alwaysdata.net', 'jaubert_web_dyna', 'jaubert_web_dyna', 'webdyna');
        $query = $pdo->prepare('Select picture.path, picture.legend from jaubert_web_dyna.picture
                                      join jaubert_web_dyna.personHasPicture on picture.id=personHasPicture.idPicture
                                      join jaubert_web_dyna.person on person.id=personHasPicture.idPerson
                                      join jaubert_web_dyna.movieHasPerson on person.id=movieHasPerson.idPerson
                                      join jaubert_web_dyna.movie on  movie.id = movieHasPerson.idMovie
                                      where jaubert_web_dyna.movie.title =\''. $movie. '\'
                                      and jaubert_web_dyna.movieHasPerson.role=\''.$role.'\'');
        $query->execute();
        if ($query->rowCount() == 0){
            echo 'Film non trouvé';
            return null;
        }
        else{
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
}


$papa = pplMovie($data);
?>

<?php if ($data['type']==='director'):?>
    Réalisateur :
    <aside class="actorFlex">
        <?php foreach ($papa as $key => $director):?>
            <?php
            $path = 'img/'.$director['path'];
            $legend = $director['legend'];

            ?>
            <figure>
                <img src=<?=$path?>>
                <figcaption>
                    <?= $legend?>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </aside>
<?php elseif ($data['type']==='actor'):?>
    Acteurs :
    <aside class="actorFlex">
        <?php foreach ($papa as $key => $actor):?>
            <?php
            $chemin = 'img/'.$actor['path'];
            $legende = $actor['legend'];
            ?>
            <figure>
                <img src=<?=$chemin?>>
                <figcaption>
                    <?=$legende?>
                </figcaption>
            </figure>
        <?php endforeach;?>
    </aside>
<?php else:?>
    Person not found
<?php endif;?>

<?php
$ptipresse = $data['presse'] / 10;
$ptispectateurs = $data['spectateurs']/10;

$labelpresse = $ptipresse. '/5';
$labelpressespect = $ptispectateurs. '/5';
?>

<section>
    <article>
        <h1>
            Fiche du film
        </h1>
        <p>
            Titre : <?= $data['titre']?><br>
            Sortie : <time datetime=<?=$data['datetime']?>> <?= $data['date']?> </time><br>
            Synopsis : Kevin possède 23 personnalités, avec des attributs physiques différents pour chacune, mais l’une d’elles reste enfouie au plus profond de lui. Elle va bientôt se manifester et prendre le pas sur toutes les autres. Poussé à kidnapper trois adolescentes, dont la jeune Casey, Kevin devient dans son âme et sa chair, le foyer d’une guerre que se livrent ses multiples personnalités, alors que les divisions qui régnaient jusqu’alors dans son subconscient volent en éclats.<br>
            Notes sur Allocine : <label for="presse"> Presse : </label> <meter id="presse" min="0" max="50" value=<?= $data['presse'] ?> title=<?= $labelpresse?>></meter>, <label for="spectateurs"> Spectateurs : </label> <meter id="spectateurs" min="0" max="50" value=<?= $data['spectateurs']?> title=<?= $labelpressespect?>></meter><br>
        </p>
    </article>
</section>

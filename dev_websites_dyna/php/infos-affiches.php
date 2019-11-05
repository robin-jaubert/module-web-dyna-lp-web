<?php

?>

<section>
    <p>
        Le film Split s'incrit dans l'univers mis en place par le film Incassable en 2000. Avec ce dernier et le film Glass sorti en 2019, il forme une trilogie.
    </p>
    <aside class="actorFlex">

        <?php
        $alt = null;
        for($i = 0; $i < 3; $i -= -1){
            if ($data[$i] === "img/affiche_incassable.jpg"){
                $alt = 'affiche_Incassable';
            }
            elseif ($data[$i] === "img/affiche_split.jpg"){
                $alt = 'affiche_Split';
            }
            elseif ($data[$i] === "img/affiche_glass.jpg"){
                $alt = 'affiche_Glass';
            }
            ?>

            <figure>
                <img src=<?=$data[$i]?> alt=<?= $alt?>>
                <figcaption> Affiche de Incassable </figcaption>
            </figure>

            <?php
        }
        ?>
</section>
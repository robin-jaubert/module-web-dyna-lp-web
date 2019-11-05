<?php

?>

<section>
    <p>
        Le film Split s'incrit dans l'univers mis en place par le film Incassable en 2000. Avec ce dernier et le film Glass sorti en 2019, il forme une trilogie.
    </p>
    <aside class="actorFlex">

        <?php
        $alt = null;
        $title = null;
        for($i = 0; $i < 3; $i += 1){
            if ($i === 0){
                $alt = 'affiche_Incassable';
                $title = 'Affiche d\'Incassable';
            }
            elseif ($i === 1){
                $alt = 'affiche_Split';
                $title = 'Affiche de Split';
            }
            elseif ($i === 2){
                $alt = 'affiche_Glass';
                $title = 'Affiche de Glass';
            }
            ?>

            <figure>
                <img src=<?=$data[$i]?> alt=<?= $alt?>>
                <figcaption> <?= $title?> </figcaption>
            </figure>

            <?php
        }
        ?>
</section>
<?php
if ($data['type'] === 'director') {
    ?>
    <section>
        Réalisateur :
        <aside class="actorFlex">
            <figure>
                <img src=<?= $data['image'] ?> alt=<?= $data['director'] ?>>
                <figcaption> <?= $data['name'] ?> </figcaption>
            </figure>
        </aside>
    </section>

    <?php
}
elseif($data['type'] === 'actor'){
    ?>
    <section>
        <aside class="actorFlex">
            Acteurs:
            <?php
            for ($i = 0; $i < 8; $i+=1){
                ?>
                <figure>
                    <img src=<?= $data['image'][$i]?> alt=<?= $data['actor'][$i]?>>
                    <figcaption> <?= $data['name'][$i] ?> </figcaption>
                </figure>

                <?php
            }
            ?>
        </aside>
    </section>
    <?php
}
?>

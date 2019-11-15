<?php

switch ($data['class']) {
    case 'navHome':
        ?>

        <header>
            <nav id="top">
                <ul>
                    <li><a href='#' class="navHome"> Accueil | </a></li>
                    <li><a href='director.php'> Directeur | </a></li>
                    <li><a href='actors.php'> Acteurs </a></li>
                </ul>
            </nav>
        </header>

        <?php
        break;
    case 'navDir':
        ?>

        <header>
            <nav id="top">
                <ul>
                    <li><a href='index.php'> Accueil | </a></li>
                    <li><a href='#' class="navHome> Directeur | </a></li>
                    <li><a href='actors.php'> Acteurs </a></li>
                </ul>
            </nav>
        </header>

        <?php
        break;
    case 'navAct':
        ?>

        <header>
            <nav id="top">
                <ul>
                    <li><a href='index.php'> Accueil | </a></li>
                    <li><a href='director.php'> Directeur | </a></li>
                    <li><a href='#' class=navHome> Acteurs </a></li>
                </ul>
            </nav>
        </header>

        <?php
        break;
    default:
        ?>
        <header>
            <nav id="top">
                <ul>
                    <li><a href='index.php'> Accueil | </a></li>
                    <li><a href='director.php'> Directeur | </a></li>
                    <li><a href='actors.php'> Acteurs </a></li>
                </ul>
            </nav>
        </header>
        <?php
        break;
}
?>
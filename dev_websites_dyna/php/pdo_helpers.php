<?php

function pdoCreate($host, $dbname, $user, $pwd){

    try{
        $dsn = 'mysql:host=' .$host. ';mysql:dbname=' .$dbname;
        $pdo = new PDO($dsn, $user, $pwd);
        $pdo->exec('SET CHARACTER SET utf8');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch (PDOException $e){
        die('Erreur : ' . $e->getMessage());
    }
}
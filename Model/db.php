<?php

    $bdd = new PDO('mysql:host=localhost;dbname=inspection', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $bdd->exec('SET NAMES utf8');

?>
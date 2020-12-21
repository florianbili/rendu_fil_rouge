<?php

$bdd = new PDO('mysql:host=localhost;dbname=rendu_php;charset=utf8', 'root', '');;

session_start();

require "Controller/Controller.php";

?>
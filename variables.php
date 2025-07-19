<?php 

// Récupération des variables à l'aide du client MySQL

// Représente une requête préparée et, une fois exécutée, le jeu de résultats associé.
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement-> execute();
$users = $usersStatement->fetchAll();

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE is_enabled is TRUE');
$recipesStatement-> execute();
$recipes = $recipesStatement->fetchAll();
?>
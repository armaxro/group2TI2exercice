<?php

// Chargement des dépendances
require_once("../config.php");
require_once("../Modeles/informationsModel.php");
// Connexion à la base de donnée

try{
  $db = new PDO(MY_DB_DRIVER.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);  
}catch(Exception $e){
 die($e->getMessage());    
}

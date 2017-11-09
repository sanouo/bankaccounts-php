<?php

require("model/connexion.php");
require("model/Manager.php");

// load all class
function loadClass($class) {
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// create object $manager type ClientManager
$manager = new Manager($bdd);
if (isset($_POST['name']) && isset($_POST['cash'])) {
  //  $donnees = [
  //       "name" => $_POST['name'],
  //       "cash" => $_POST['cash'],
  //     ];



              $donnees = new Account($_POST);

      $manager->add($donnees);
      header("Location: index.php");
}

$donnees= $manager->getAccounts();



if(isset($_GET['supprim'])){
  $donnees= $manager->delete($_GET['supprim']);
}

require ('views/indexVue.php');

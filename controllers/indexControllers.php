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
   $donnees = [
        "name" => $_POST['name'],
        "cash" => $_POST['cash'],
      ];

      // if ($donnees['type'] == 'Moto') {
              $test = new Account($donnees);
            // }
      $manager->add($test);
      header("Location: index.php");
}


require ('views/indexVue.php');

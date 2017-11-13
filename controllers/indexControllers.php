<?php

require("model/connexion.php");
require("model/Manager.php");

// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// create object $manager type ClientManager
$manager = new Manager($bdd);


// call function add

if (isset($_POST['submitUpdate'])) {
  $account = $manager->get($_POST['id']);

  var_dump($account);
  $donnees = new Account($_POST);
  $manager->getUpdate($donnees);
}

if (isset($_POST['addAccount']))
// && isset($_POST['name']) && isset($_POST['cash'])
{
  $donnees = new Account($_POST);
  $manager->add($donnees);
  header("Location: index.php");
}





// call function getAccounts
$donnees= $manager->getAccounts();


// call function delete
if(isset($_GET['supprim']))
{
  $donnees= $manager->delete($_GET['supprim']);
}


require ('views/indexVue.php');

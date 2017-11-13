<?php

require("model/connexion.php");
require("model/Manager.php");

// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// create object $manager
$manager = new Manager($bdd);


if (isset($_POST['submitUpdate']) && isset($_POST['addMoney'])){
    // retrieve the object from the ID
      $update = $manager->get($_POST['id']);
    // call function addCash
    $update->addCash($_POST['addMoney']);
    // update object
    $manager->getUpdate($update);
}


if (isset($_POST['submitUpdate']) && isset($_POST['takeMoney'])){
    // retrieve the object from the ID
    $update = $manager->get($_POST['id']);
    // call function takeCash
    $update->takeCash($_POST['takeMoney']);
    // update object
    $manager->getUpdate($update);
}


if (isset($_POST['addAccount']))
{
  $donnees = new Account($_POST);
  // call function add (for insert in the database)
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

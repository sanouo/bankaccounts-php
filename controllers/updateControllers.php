<?php

require("model/connexion.php");
require("model/Manager.php");
require("entities/Account.php");




// create object $manager type ClientManager
$manager = new Manager($bdd);




    $update = $manager->get($_GET['id']);





require("views/updateViews.php");

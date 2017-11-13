<?php

require("model/connexion.php");
require("model/Manager.php");
require("entities/Account.php");


// create object $manager
$manager = new Manager($bdd);

// call function get
$update = $manager->get($_GET['id']);


require("views/updateViews.php");

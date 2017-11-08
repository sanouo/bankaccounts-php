<?php

require("../model/connexion.php")
require ("../views/indexVue.php");

// load all class
function loadClass($class) {
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

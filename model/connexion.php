<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=bank;charset=utf8', 'phpmyadmin', 'sana15');
} catch (Exception $e) {
  die($e->getMessage());
}

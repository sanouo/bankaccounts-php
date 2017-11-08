<?php
class Manager{
      protected $bdd;
      public function __construct($bdd)
      {
        $this->setBdd($bdd);
      }
// setters for bdd
       public function setBdd(PDO $bdd)
       {
          $this->bdd = $bdd;
       }
// Execute a INSERT request in database
      public function add($bank)
      {
        $q = $this->bdd->prepare('INSERT INTO account(name, cash) VALUES(:name, :cash)');
        $q->bindValue(':name', $bank->getName());
        $q->bindValue(':cash', $bank->getCash());
        $q->execute();
      }
}

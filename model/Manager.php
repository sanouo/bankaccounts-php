<?php
class Manager{
      protected $bdd;

  // function construct
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

      public function get($id)
          {
            $id = (int) $id;
            $q = $this->bdd->query('SELECT * FROM account WHERE id = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return new Account($donnees);
          }

  // Execute a SELECT request database
      public function getAccounts()
      {
        $req = $this->bdd->prepare('SELECT * FROM account');
        $req->execute();
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($donnees as $key => $value) {
        $donnees[$key] = new Account($value);
       }
        return $donnees;
      }


      public function getUpdate($bank)
      {
        $q = $this->bdd->prepare ('UPDATE account SET name = :name, cash= :cash WHERE id = :id');

        $q->bindValue(':id', $bank->getId());
        $q->bindValue(':name', $bank->getName());
        $q->bindValue(':cash', $bank->getCash());
        $q->execute();

      }

   //  Execute a DELETE request
      public function delete($supprim)
      {
        $req = $this->bdd->exec('DELETE FROM account WHERE id = '.$supprim);
        header("Location: index.php");
      }

}

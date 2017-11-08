<?php
// class abstract Account
class Account {
  protected $id;
  protected $name;
  protected $cash;


  public function __construct(array $data){
    $this->hydrate($data);
  }
  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
      $this->$method($value);
      }
    }
  }

  // getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCash()
    {
        return $this->cash;
    }


  // setters
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setCash($cash)
    {
        $this->cash = $cash;
        return $this;
    }
}
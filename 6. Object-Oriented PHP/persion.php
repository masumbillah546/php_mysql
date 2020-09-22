 <?php 


 class person {
    private $name="";
    private $age="";
 
    public function setName($name="")
    {
      $this->name=$name;
      return $this;
    }
    public function setAge($age="")
    {
      $this->age=$age;
      return $this;
    }
    public function getInfo()
    {
      echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
    }
}
 
    $person = new person();
    $person->setName("Masum Billah");
    $person->setAge("29");
    $person->getInfo();
    echo "<br>";

    $person2 = new person();
    $person2->setName("Minar Khan");
    $person2->setAge("28");
    $person2->getInfo();
    echo "<br>";

    $person3 = new person();
    $person3->setName("Monir Hossain")->setAge("27")->getInfo();
?>
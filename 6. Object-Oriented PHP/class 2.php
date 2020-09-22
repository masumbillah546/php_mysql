<?php
class SimpleClass
{
    public $var = 'a default value'; // public property declaration
    const a="America"; // private constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$ob= new SimpleClass;
$ob->displayVar();

echo "<br>";

echo SimpleClass::a;

?>
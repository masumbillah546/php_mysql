<?php
class SimpleClass
{
    // property declaration
    public $var = 'Hello Simple Class';
 	const a="Welcome";
    //  method declaration 
    public function sayHello() {
        echo $this->var."<br>"; // use $this to show $var value

        echo self::a;
    }
}

$obj=new SimpleClass;
$obj->sayHello(); // Result: Hello Simple Class

?>
<?php


 trait trt{
    // public function sayHello(){
    //     echo "say hellow from trait";
    // }
}

 class Base{
     public function sayHello(){
         echo "say hello from base";
    }
}
 



 
class Child extends Base{
 
    use trt;
    // public function sayHello(){
    //     echo "hello from child class";
    // }
}
 
$objCls = new Child;
 
$objCls->sayHello();
 
?>
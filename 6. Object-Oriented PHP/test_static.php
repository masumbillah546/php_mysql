<?php
class testStatic{
     
  public static $count = 0;
 
   
  public static function counter(){
      echo "Its Static Counter: ";
      echo self::$count++,"<br>"; // accessing static Property inside class
  }
  
}
// Calling Static Method Outside Class
testStatic::counter(); 
testStatic::counter();
testStatic::counter();
testStatic::counter();
testStatic::counter();
?>
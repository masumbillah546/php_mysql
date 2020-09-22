<?php
class Member{
  public $Name="Masud Alam";
  public $Email="masud@mail.com";
  public $mobile="01788990099";
  public  $address="Dhaka,Bangladesh";
}
  
$member = new Member();
  
$memberString = serialize( $member );
 
echo $memberString;
?>
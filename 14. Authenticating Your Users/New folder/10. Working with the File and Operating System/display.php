 <?php
$x=dir(".");
while($y=$x->read())
{
echo $y. "<br>";
}
$x->close();
?>

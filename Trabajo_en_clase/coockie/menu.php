<?php
$a= $_POST['A'];
$b=$_POST['B'];
setcookie('A',$a,0);
setcookie('B',$b,0);

echo '<ul>';
echo '<li><a href="resultado.php?operacion=suma">suma</a></li>';
echo '<li><a href="resultado.php?operacion=resta">resta</a></li>';
echo '<li><a href="resultado.php?operacion=multiplicacion">multiplicacion</a></li>';
echo '<ul>';

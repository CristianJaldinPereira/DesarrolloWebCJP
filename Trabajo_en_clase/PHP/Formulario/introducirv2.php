<form action="mayor.php-" method="post">
<?php
$n=$_POST['n'];
for ($i=0;$i<$n;$i++)
{
?>
<input type="number" name="valor<?php echo $i?>" > <br>

<?php
}
?>
<input type="hidden" name="n" value="<?php echo $n?>">

</form>
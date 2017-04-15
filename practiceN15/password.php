<?php 
$password = $_POST['pass'];
$pattern = "((?=.*[@#$%^&].{2})(?=.*[A-Z].{2,}).{5,13})";
if (isset($_POST['submit']))
{
if(preg_match($pattern, $password))
{
	echo 'Ваш пароль'.  $password;
}
else die ('Введен некорректный пароль');
}

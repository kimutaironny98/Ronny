<?php
 if (isset($_POST['submit'])){
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$text=$_POST['texxt'];
 	$textarea=$_POST['textarea'];
 	$mysqli->query("INSERT INTO contact_info(name,email,texxt,textarea)VALUE('$name','$email','$text','$textarea')")or die($mysqli->error); 
 }
?>
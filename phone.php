<?php

include 'settings.php';
$dbc = new mysqli(	sql200.b6b.ir, b6bi_27936531, DBPASS, b6bi_27936531_w449); 
$sql = "INSERT INTO message(title, body)
		VALUES('{$_POST['title']}', '{$_POST['body']}')";

$result = $dbc -> query( $sql ); 
$dbc -> close(); 
include 'functions.php';
$alert = alertTemplate('با موفقیت ثبت شد!', 'error');
?>


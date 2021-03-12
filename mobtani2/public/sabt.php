<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){
	$sql = "INSERT INTO Product (name,family,gender,userPicture) 
	VALUES('{$_POST['name']}', {$_POST['family']},'{$_POST['gender']}','{$_POST['userPicture']')";

$db = new DB();

$result = $db -> execute( $sql );
unset( $db );


if( $result )	
	$alert = alertTemplate('با موفقیت ثبت شد!', 'success');


}
?>
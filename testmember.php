<?php
session_start();
include_once 'apicaller.php';

$apicaller = new ApiCaller('APP001', '28e336ac6c9423d946ba02d19c6a2632','http://localhost/aops-server/');

$todo_items = $apicaller->sendRequest(array(
	'controller' => 'member',
	'action' => 'getmemberchilds',
	'username' => $_SESSION['username'],
	'userpass' => $_SESSION['userpass'],
	'member_id' => 1
));
echo $todo_items;
?>

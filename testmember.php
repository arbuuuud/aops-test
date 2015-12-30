<?php
session_start();
include_once 'apicaller.php';

$apicaller = new ApiCaller('APP001', '28e336ac6c9423d946ba02d19c6a2632','http://localhost/aops-server/');

$todo_items = $apicaller->sendRequest(array(
	'controller' => 'member',
	'action' => 'getmemberchilds',
	'username' => 'aops',
	'userpass' => 'password',
	'member_id' => 4
));
echo var_dump($todo_items);
?>

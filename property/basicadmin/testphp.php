<?php



$name = $_REQUEST['username'];
$password = $_REQUEST['password'];


$list = array('name'=>$name, 'password'=>$password);

$c = json_encode($list);
echo $c;
?>

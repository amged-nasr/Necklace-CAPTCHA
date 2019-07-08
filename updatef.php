<?php


$number = $_REQUEST['number'];

$id = $_REQUEST['id'];

$con = mysqli_connect('localhost','root','','capacha');

$sql = "UPDATE `image` SET `falsenum` = $number where `id` = $id " ;

mysqli_query($con,$sql);


echo json_encode('Done');
<?php


$number = $_REQUEST['number'];

$id = $_REQUEST['id'];

$con = mysqli_connect('localhost','root','','capacha');

$sql = "UPDATE `image` SET `truenum` = $number where `id` = $id " ;

mysqli_query($con,$sql);


echo json_encode('Done');
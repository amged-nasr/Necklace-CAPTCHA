<?php

$con = mysqli_connect('localhost','root','','capacha');

$sql = "SELECT * FROM image ";

$record = mysqli_query($con,$sql);

$images = array();

while($row = mysqli_fetch_assoc($record)){
    $images [] = $row;
}

echo json_encode($images);
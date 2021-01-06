<?php
$link = mysqli_connect("Localhost", "root","");

if($link == false){
    die("Error: Could not connect".mysqli_connect_error());
}

$sql = "Create Database Final-Su";

if(mysqli_query($link,$sql)){
    echo"Database created successfully";
} else{
    echo"Error: Conldn't connect". mysqli_connect_error($link);
}
?>
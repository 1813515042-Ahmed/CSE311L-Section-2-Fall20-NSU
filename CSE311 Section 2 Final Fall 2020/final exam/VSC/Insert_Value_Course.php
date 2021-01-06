<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO course(snum,cname) VALUES 
(99354543,'Patent law'),
(112348546,'Database System'),
(112348546,'Operating System Design'),
(115987938,'Database Systems'),
(115987938,'Operating System Design'),
(301221823,'American Political Parties'),
(301221823,'Perception'),
(301221823,'Social Cognition'),
(322654189,'Database Systems'),
(322654189, 'Operating Systems Design'),
(348121549,'Database Systems'),
(455798411,'Operating System Design'),
(455798411,'Optical Electronics'),
(552455318,'Communication Networks'),
(552455318,'Database Systems'),
(552455318,'Operating System Design'),
(556784565,'Air Quality Engineering'),
(567354612,'Data Structures'),
(567354612,'Operating System Design'),
(574489456,'Urban Economics')";

if(mysqli_query($link, $sql)){
    echo "Values inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
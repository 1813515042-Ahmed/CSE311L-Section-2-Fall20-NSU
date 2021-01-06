<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO department (fid, fname, deptid) VALUES
(090873519,'Elizabeth Taylor',11),
(142519864,'Ivana Teach',20),
(242518965,'James Smith',68),
(248965255,'Barbara Wilson',12),
(254099823,'Patricia Jones',68),
(287321212,'Michael Miller',12),
(489221823,'Richard Jackson',33),
(489456522,'Linda Davis',20),
(548977562,'Ulysses Teach',20)";

if(mysqli_query($link, $sql)){
    echo "Values inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
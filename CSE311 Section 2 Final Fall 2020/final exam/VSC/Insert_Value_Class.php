<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "final_exam");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO class (name, meets_at, room,fid) VALUES
        ('Air Quality Engineering','TuTh 10:30-11:45','R15',011564812),
        ('American Political Parties','TuTh 2-3:15','20AVW',619023588),
        ('Archaeology of the Incas','MWF 3-4:15','R128',248965255),
        ('Aviation Accident Investigation','TuTh 1-2:50','Q3',011564812),
        ('Communication Networks','MW 9:30-10:45','20 AVW',141582651),
        ('Dairy Herd Management','TuTh 12:30-1:45','R128',356187925),
        ('Data Structures','MWF 10','R128',489456522),
        ('Database System','MWF 12:30-1:45','1320 DCL',142519864),
        ('Intoduction to Math','TuTh 8-9:30','R128',489221823),
        ('Introductory Latin','MWF 3-4:15','R12',248965255),
        ('Marketing Research','MW 10-11:15','1320 DCL',489221823),
        ('Multivariate Analysis','TuTh 2-3:15','R15',090873519),
        ('Operating System Design','TuTh 12-1:20','20 AVW',489456522),
        ('Optical Electronics','TuTh 12:30-1:45','R15',254099823),
        ('Orbital Mechanics','MWF 8','1320 DCL',011564812),
        ('Organic Chemistry','TuTh 12:30-1:45','R12',489221823),
        ('Patent Law','F 1-2:50','R128',090873519),
        ('Perception','MTuWTh 3','Q3',489221823),
        ('Seminar in American Art','M 4','R15',489221823),
        ('Social Cognition','Tu 6:30-8:40','R15',159542516),
        ('Urban Economics','MWF 11','20 AVW',489221823)";


if(mysqli_query($link, $sql)){
    echo "Values inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
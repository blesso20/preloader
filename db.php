<?php

// echo "<div class='wrapper'>";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_projects";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("No database found".$conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$tittle = $conn->real_escape_string($_POST['tittle']);
$priority = $conn->real_escape_string($_POST['priority']);
$deadline = $conn->real_escape_string($_POST['deadline']);
$task = $conn->real_escape_string($_POST['task']);

$query = "INSERT INTO `todolist`( `Name`, `Task_Tittle`, `Priority`, `Deadline`, `Task`) VALUES (\"".$name."\", \"".$tittle."\", \"".$priority."\", \"".$deadline."\", \"".$task."\")";

if($conn->query($query) === TRUE){
    echo "Form submitted Successfully";
}
else{
    echo "Unable To Submit form".$sql."<br/>".$conn->error;
}

 $conn->close();


// echo "</body>";
// echo "</html>"; 
?>

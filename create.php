<?php

// Create connection
$conn = mysqli_connect("dbserv.cs.siu.edu", "skanmanthareddy" , "uJ21pboy" , "skanmanthareddy");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE students (
txtname varchar(30), 
txtid  varchar(30) PRIMARY KEY,
txtyear varchar(30),
txtdepartment varchar(30),
txtcgpa decimal(3,2),
txtlevelofstudy varchar(30)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
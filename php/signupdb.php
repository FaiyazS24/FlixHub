<?php
$mydb = new mysqli("localhost", "root", "", "");

if ($mydb->connect_error) {
    die("Connection failed: " . $mydb->connect_error);
}

// Creating Database
$create_db = "users_db";
$create_db_query = "CREATE DATABASE $create_db";

if (mysqli_query($mydb, $create_db_query)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($mydb);
}

mysqli_close($mydb);

// Creating connection
$mydb = new mysqli("localhost", "root", "", "users_db");

if ($mydb->connect_error) {
    die("Connection failed: " . $mydb->connect_error);
}

//Creating tables using MySQL CREATE TABLE query
$create_query = "CREATE TABLE users (
    ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname varchar(255),
    lname varchar(255),
    email varchar(255) NOT NULL,
    password varchar(255)    
)";

if ($mydb->query($create_query) === TRUE) {
    echo "Table personal_info created successfully";
  } else {
    echo "Error creating table: " . $mydb->error;
  }
  
  
mysqli_close($mydb);
?>

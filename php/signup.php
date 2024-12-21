<?php
$mydb = new mysqli("localhost", "root", "", "users_db");

// Check connection
if ($mydb->connect_errno) {
    echo "Failed to connect to MySQL: " . $mydb->connect_error;
    exit();
}

if (isset($_POST['insert'])) {
    // Insert user data into the database
    $insert_query = "INSERT INTO users (`fname`, `lname`, `email`, `password`) VALUES ('" . $_POST['custfName'] . "', '" . $_POST['custlName'] . "', '" . $_POST['custEmail'] . "', '" . $_POST['custpass'] . "')";

    $insert_result = mysqli_query($mydb, $insert_query);

    if ($insert_result) {
        // Redirect to the index.html page after successful signup
        header("Location: index.html");
        exit;
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($mydb);
    }
}

$queryFetch = "select * from users";
$result = mysqli_query($mydb, $queryFetch);

// Close the MySQLi connection
$mydb->close();
?>

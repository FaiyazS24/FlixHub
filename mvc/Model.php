<?php
class Model {

    private $mydb;

    public function __construct() 
    {
        //instnace of mysqli class is created here
        $this->mydb = new mysqli("localhost", "root", "", "users_db");

        
        if ($this->mydb->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mydb->connect_error;
            exit();
        }
    }

    //Checks user authentication
    public function isAuthenticated() {

        return isset($_SESSION['user']);
    }
    public function getUsername() {
        return isset($_SESSION['user']['fname']) ? $_SESSION['user']['fname'] : '';
    }

    //User authentication
    public function authenticateUser($email, $password) {
        $select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $select_result = mysqli_query($this->mydb, $select_query);
        $row = mysqli_fetch_assoc($select_result);
    
        return $row;
    }

    //Registers user
    public function registerUser($fname, $lname, $email, $password) {
        $insert_query = "INSERT INTO users (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password')";
        $insert_result = mysqli_query($this->mydb, $insert_query);
        return $insert_result;
    }

    
}

<?php
session_start();

class Controller {
    private $model;
    private $view;
    private $successMessage = "";
    private $errorMessage = "";

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    // Handles Dashboard request from index.php
    public function handleDashboardRequest() {
        //checks if the user is authenticated
        if (!$this->model->isAuthenticated()) {
            
            header('Location: login.php');

        } else {
            $this->view->renderDashboard($this->model,$this->successMessage, $this->errorMessage);
        }
    }

    // Handles Registration request from index.php
    public function handleRegisterRequest() {
        if ($this->model->isAuthenticated()) {
            header('Location: index.php'); // logged in area
        }
        if (isset($_POST["register"])) {
            $fname = $_POST['custfName'];
            $lname = $_POST['custlName'];
            $email = $_POST['custEmail'];
            $password = $_POST['custPass'];

            $insert_result = $this->model->registerUser($fname, $lname, $email, $password);
            
            if ($insert_result) {
                $this->successMessage = 'Register successfully! Now you can login';
            } else {
                $this->errorMessage = 'Something went wrong';
            }

        }

        $this->view->renderRegister($this->successMessage, $this->errorMessage);

    }

    // Handles LogIn request from index.php
    public function handleLoginRequest() {
        if ($this->model->isAuthenticated()) {
            header('Location: index.php'); // logged in area
        }
        
        if (isset($_POST["insert"])) {
            $email = $_POST['custEmail'];
            $password = $_POST['custpass'];
        
            $user = $this->model->authenticateUser($email, $password);
            if ($user) {
                
                $_SESSION['user'] = $user;
                header('Location: index.php');
            } else {
                $this->errorMessage = 'Wrong login details!';
                $this->view->renderLogin($this->successMessage, $this->errorMessage);
            }
            exit();
        } 
        
        $this->view->renderLogin($this->successMessage, $this->errorMessage);
        
    }

    // Handles LogOut request from index.php
    public function handleLogoutRequest() {
        session_destroy();
        header('Location: Index.html');
    }

    

}

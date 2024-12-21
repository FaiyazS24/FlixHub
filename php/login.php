<?php

include 'Model/Model.php';
include 'View/View.php';
include 'Controller/Controller.php';

$model = new Model();   //creates an instance of the Model class
$view = new View();     //creates an instance of the view class
$controller = new Controller($model, $view);    //creates an instance of the Controller class and passes the Model and View instances to it. 

//mathod calls to respective instances
$view->showHeader();    // render header
$controller->handleLoginRequest();
$view->showFooter();    // render footer

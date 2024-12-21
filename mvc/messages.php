<?php 
if(isset($successMessage) && $successMessage != ""){
    echo '<p class="success">'.$successMessage.'<p>';
} //Success message
if(isset($errorMessage) && $errorMessage != ""){
    echo '<p class="failure">'.$errorMessage.'<p>';
}//Failure message
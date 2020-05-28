<?php
 function login(){
   
 }


function logout(){
    if (isset($_POST['logout'])){
        session_unset();
        session_destroy();
        redirect('../index.php');
    }
}




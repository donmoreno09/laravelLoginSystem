<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function checkErrors(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $password = $_POST['pwd'];
            $email = $_POST['email'];

            $errors = [];

            if(empty($username) || empty($password) || empty($email)){
                $errors['empty_input'] = "Fill in all fields!";
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email_invalid'] = "Email invalid";
            }

            




        }
    }
}

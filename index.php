<?php

require 'user_db.php';
require 'DatabaseConnection.php';
require 'User.php';


session_start();
if (!isset($_SESSION['uName'])) {
    $_SESSION['uName'] = "";
}


$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
        //$action = 'profile';   
        $action = 'list_products';
        $action = 'default';
    }
}
//message = "";
switch ($action) {
    case 'default':
        include ('HomePage.php');
        //include 'HomePage.php';
        die();

    case 'register':
        $options = [
            'cost' => 12
        ];
        $err = [];
        $welcomeMessage = "";
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $uName = filter_input(INPUT_POST, 'uName');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        if (preg_match('/^.{10}/', $password) != 1) {
            $err['shortPass'] = "Password must be at least 10 characters.";
        }
        if (preg_match('/[a-z]/', $password) != 1) {
            $err['lcasePass'] = "Your password must contain a lowercase letter.";
        }
        if (preg_match('/[A-Z]/', $password) != 1) {
            $err['ucasePass'] = "Your password must contain an Uppercase letter.";
        }
        if (preg_match('/[0-9]/', $password) != 1) {
            $err['digPass'] = "Your password must contain a digit.";
        }
        if ($fName == null || $fName == "") {
            $err['fName'] = "Enter a First Name";
        }
        if (preg_match('/^[a-zA-Z]/', $fName) != 1) {
            $err['fNamefirstchar'] = "First Name must begin with a letter";
        }
        if ($lName == null || $lName == "") {
            $err['lName'] = "Enter a last name";
        }
        if (preg_match('/^[a-zA-Z]/', $lName) != 1) {
            $err['lNamefirstchar'] = "Last Name must begin with a letter";
        }
        if (preg_match('/^.{4,30}$/', $uName) != 1) {
            $err['uName'] = "Username required,must be between 4 and 30 characters";
        }
        if (preg_match('/^[a-zA-Z]/', $uName) != 1) {
            $err['uNamefirstchar'] = "Username must begin with a letter";
        }
        if ($email == null || $email == "") {
            $err['noEmail'] = "Enter an Email";
        } else if ($email == false) {
            $err['invalidEmail'] = "Email is invalid";
        }
        if (user_db::search_by_username2($uName) === true) {
            $err['NameTaken'] = "Duplicate username, please try again";
        }
        if (user_db::search_by_email($email) === true) {
            $err['emailTaken'] = "Duplicate email, please try again";
        }
        if (empty($err)) {
            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
            $User = new User($fName, $lName, $uName, $email, $hashpass);
            user_db::insert_users($User);
            echo $welcomeMessage .= "Welcome to the site " . $fName . "!";
            include 'LogIn.php';
        } else {
            include('registration.php');
        }
        die();
        break;

    case 'logIn':
        $loginUName = filter_input(INPUT_POST, 'loginUName');
        $loginPassword = filter_input(INPUT_POST, 'loginPassword');

        if (user_db::verify_UserPass($loginUName, $loginPassword)) {
            $_SESSION['uName'] = $loginUName;
            $user = user_db::select_userType($loginUName);

            $admin = 'admin';
            if (strcasecmp($user, $admin) == 0) {
                include 'Admin_view.php';
            } else {
                include 'ProfileHome.php';
            }
        } else {
            include 'logIn.php';
        }
        die();
        break;

  
    case 'viewAllUsers':

        $Users = user_db::select_all_users();
        include 'disp_users.php';
        die();
        break;


       
    case 'delete_User':
        $user_id = filter_input(INPUT_POST, 'uName');
        echo $user_id;
        user_db::delete_users($user_id);
        include 'ConfirmDelete.php';
        break;
        die();
}
?>
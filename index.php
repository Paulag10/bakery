<?php

require 'model/user_db.php';
require 'model/DatabaseConnection.php';
require 'model/User.php';
require 'model/SweetType.php';
require 'model/sweetDB.php';
require 'model/event.php';
require 'model/survey.php';
require 'model/Comment.php';





session_start();
if (!isset($_SESSION['uName'])) {
    $_SESSION['uName'] = "";
}
 


$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == null) {
          
        $action = 'list_products';
        $action = 'default';
    }
}

switch ($action) {
    case 'default':
        include ('view/HomePage.php');
    
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
            include 'view/logIn.php';
        } else {
            include('view/registration.php');
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
                include 'view/Admin_view.php';
            } else {
                include 'view/ProfileHome.php';
            }
        } else {
            include 'view/logIn.php';
        }
        die();
        break;

    case 'list_sweets':
        $sweetType = filter_input(INPUT_GET, 'SweetTypeID', FILTER_VALIDATE_INT);
        if ($sweetType == 1) {
            $sweetTypes = sweetDB::get_sweetTypes();
            $sweets = sweetDB::get_sweetsType($sweetType);
            include('view/Profile.php');
        } else if ($sweetType == 2) {

            $sweetTypes = sweetDB::get_sweetTypes();
            $sweets = sweetDB::get_sweetsType($sweetType);
            include('view/Profile.php');
        } else {
            $sweetType == 3;
            $sweetTypes = sweetDB::get_sweetTypes();
            $_SESSION['SweetTypeID'] = $sweetType;


            $sweets = sweetDB::get_sweetsType($sweetType);
            include('view/Profile.php');
        }
        break;
        die();


    case 'viewAllUsers':

        $Users = user_db::select_all_users();
        include 'view/disp_users.php';
        die();
        break;

    case 'viewAllEvents':
       $event = sweetDB::getAllEvents();
        include 'view/events_delete.php';
        break;
        die();
        
    case 'viewAllSurveys':

        $survey = user_db::getAllSurveys();

        include 'view/viewAllSurveys.php';
        break;
    die();
        

    case 'view_sweets':

        $sweetsID = filter_input(INPUT_GET, 'sweetsID', FILTER_VALIDATE_INT);
        $sweet = sweetDB::getSweetView($sweetsID);
        $_SESSION ['sweetID'] = $sweetsID;

        include('view/Profile_view.php');

        break;
        die();

    case 'events':

        $event = sweetDB::getAllEvents();
        include 'view/events.php';

        break;
        die();

      case 'update':
        $options = [
            
            'cost' => 12
                
        ];
        $err = [];

        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $uName = filter_input(INPUT_POST, 'uName');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        $updatePass = filter_input(INPUT_POST, 'updatePass');
        $currUser = user_db::get_user($_SESSION['uName']);

        if ($updatePass == "yes") {
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

        if ($email == null || $email == "") {
            $err['noEmail'] = "Enter an Email";
        } else if ($email == false) {
            $err['invalidEmail'] = "Email is invalid";
        }



        if (empty($err)) {
            if ($updatePass == "yes") {
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                $User = new User($fName, $lName, $_SESSION['uName'], $email, $hashpass);
            } else {
                $User = new User($fName, $lName, $currUser->getUName(), $email, $currUser->getPassword());
            }
            user_db::update_User($User);
            $welcomeMessage = "Welcome to the site " . $fName . "!";
            include 'view/ProfileHome.php';
        } else {

            include('view/updateUsers.php');
        }

        die();
        break;



    case 'delete_User':
        $user_id = filter_input(INPUT_POST, 'uName');
        echo $user_id;
        user_db::delete_users($user_id);
        include 'view/ConfirmDelete.php';
        break;
        die();
    case 'delete_event':
        $eventID = filter_input(INPUT_POST, 'eventID');
      echo $eventID;
        user_db::delete_events($eventID);
        include 'view/Admin_view.php';
        break;
        die();
        
  case 'select':
     
        $date_forEvent = date("Y-m-d");
        $event_id = filter_input(INPUT_POST, 'event_id');
         $selectedEvent = sweetDB::getEvent($event_id);
       $users = $_SESSION['uName'];
      $selectedUser = User_db::get_user($_SESSION['uName']);
        user_db::logEvent($users, $event_id, $date_forEvent);
        
        include 'view/Confirmation_log.php';
        die();
        break;
      
    case 'add_event':

        $eventCode = filter_input(INPUT_POST, 'eventCode');
        $eventName = filter_input(INPUT_POST, 'eventName');
        $eventDiscription = filter_input(INPUT_POST, 'eventDiscription');
        $eventLocation = filter_input(INPUT_POST, 'eventLocation');
        $eventTime = filter_input(INPUT_POST, 'eventTime');
        $eventCost = filter_input(INPUT_POST, 'eventCost');
        if (empty($eventCode) || empty($eventName) ||
                empty($eventDiscription) || empty($eventLocation) || empty($eventTime) || empty($eventCost)) {
            
        } else {
            $f = new event($eventCode, $eventName, $eventDiscription, $eventLocation, $eventTime, $eventCost);
            user_db::addEvent($f);
        }

        include 'view/Admin_view.php';
        break;
        die();
        
    case 'add':
      
      $selectedSweets = sweetDB::getSweetView ($_SESSION ['sweetID']);
      $selectedUser = User_db::get_user($_SESSION['uName']);
      
     include 'view/Thankyou_view.php';
        break;
        die();
    case 'viewAdminHome':
        include 'view/Admin_view.php';
        break;
    die();
    case 'viewHome':
        include 'view/ProfileHome.php';
        die();
        break;
    case 'AddEvent':
        include 'view/AddEvent.php';
        die();
        break;

    
    case 'Survey':
        include 'view/Survey.php';
      
        break;
         die();
         
    case 'Log_survey':
        $date_forSurvey = date("Y-m-d");
        $userSelected = $_SESSION['uName'];
        $quality = filter_input(INPUT_POST, 'quality');
        $recommend = filter_input(INPUT_POST, 'recommend');
        $comments = filter_input(INPUT_POST, 'comments');
        
        if (empty($quality) || empty($recommend) ||
                empty($comments)){
            
        } else {
            $f = new survey($quality, $recommend, $comments);
            user_db::addSurvey($f, $userSelected, $date_forSurvey);
        }


        
        include 'view/ProfileHome.php';
        break;
        die();
        
        case'leave_comment':
            $fk_user = filter_input(INPUT_POST, 'fk_user');
        $_SESSION['fk_user'] = $fk_user;
         user_db::select_servey($fk_user);
        
     include 'view/viewComments.php';
        die();
        break;

        
          
        case 'addComment':

        $commentDate = date("Y-m-d H:i:s");
       $commentTo = $_SESSION['fk_user'];
       $commentFrom = $_SESSION['uName'];
       $comments = filter_input(INPUT_POST, 'comments');
        $selectedComment =  user_db::add_comment($commentTo, $commentFrom, $comments, $commentDate);
      
        $user = user_db::get_user($comments);
          include 'view/Thankyou_view2.php';

        die();
        break;
    

    case 'logOut':
        $_SESSION['uName'] = "";
        include 'view/HomePage.php';

        break;
        die();
}
?>



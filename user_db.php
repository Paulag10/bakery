<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_db
 *
 * @author Paula
 */
class user_db {
   public static function insert_users($user) {
        $db = DatabaseConnection::getDB();
        /* @var $user User */
        $query = 'INSERT INTO users
                 (uName, fName, lName, email, password)
              VALUES
                 (:uName, :fName, :lName, :email, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $user->getUName());
        $statement->bindValue(':fName', $user->getFName());
        $statement->bindValue(':lName', $user->getLName());
        $statement->bindValue(':email', $user->getEmail());
        $statement->bindValue(':password', $user->getPassword());

        $statement->execute();
        $statement->closeCursor();
    }

    public static function search_by_username2($uName) {
        $db = DatabaseConnection::getDB();
        $query = 'SELECT * FROM users where uName = :uName';
        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $results = $statement->fetchAll();
        if (empty($results)) {
            return false;
        } else if ($results[0]['uName'] === $uName) {
            return true;
        }
    }

  public static function verify_UserPass($uName, $Password) {
        $db = DatabaseConnection::getDB();
        $query = 'SELECT * FROM users where uName = :uName';
        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $results = $statement->fetchAll();
        if (empty($results)) {
            return false;
        }
        if ($results[0]['uName'] === $uName && password_verify($Password, $results[0]['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function get_user($uName) {
        $db = DatabaseConnection::getDB();
        $query = 'SELECT * FROM users where uName = :uName';
        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $results = $statement->fetchAll();
        if (empty($results)) {
            return false;
        } else {
            $User = new User($results[0]['fName'], $results[0]['lName'], $results[0]['uName'], $results[0]['email'], $results[0]['password'], $results[0]['profilePic']);
        }
        return $User;
    }
    
     public static function search_by_email($email) {
        $db = DatabaseConnection::getDB();

        $query = 'SELECT * FROM users where email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $results = $statement->fetchAll();
        if (empty($results)) {
            return false;
        } else if ($results[0]['email'] === $email) {
            return true;
        }
    }
     public static function select_userType ($uName){
      $db = DatabaseConnection::getDB();
        
        $query = 'SELECT * FROM users where uName= :uName';
        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $userType = $row ['userType'];
        
        return $userType;
    }
    
    public function select_all_users(){
        
          $db = DatabaseConnection::getDB();
       $query = 'SELECT * FROM users';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
       
        return $results;
     }
     
     public function delete_users($uName) {
   $db = DatabaseConnection::getDB();
    $query = 'DELETE FROM users
              WHERE uName = :uName';
    $statement = $db->prepare($query);
    $statement->bindValue(':uName', $uName);
    $statement->execute();
    $statement->closeCursor();
}

public static function addEvent($f) {
     $db = DatabaseConnection::getDB();

        $query = 'INSERT INTO events
                     (eventCode, eventName, eventDiscription, eventLocation, eventCost)
                  VALUES
                     (:eventCode, :eventName, :eventDiscription, :eventLocation, :eventCost)';
        $statement = $db->prepare($query);
        $statement->bindValue(':eventCode', $f->getEventCode());
        $statement->bindValue(':eventName', $f->getEventName());
        $statement->bindValue(':eventDiscription', $f->getEventDiscription());
        $statement->bindValue(':eventLocation', $f->getEventLocation());
        $statement->bindValue(':eventCost', $f->getEventCost());
   

        $statement->execute();
        $statement->closeCursor();
    }

}




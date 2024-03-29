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
            $User = new User($results[0]['fName'], $results[0]['lName'], $results[0]['uName'], $results[0]['email'], $results[0]['password']);
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
                     (eventName, eventCode, eventLocation, eventTime, eventDiscription, eventCost )
                  VALUES
                     (:eventName, :eventCode, :eventLocation, :eventTime, :eventDiscription, :eventCost)';
        $statement = $db->prepare($query);
        $statement->bindValue(':eventName', $f->getEventName());
        $statement->bindValue(':eventCode', $f->getEventCode());
        $statement->bindValue(':eventLocation', $f->getEventLocation());
        $statement->bindValue(':eventTime', $f->getEventTime());
        $statement->bindValue(':eventDiscription', $f->getEventDiscription());
        $statement->bindValue(':eventCost', $f->getEventCost());
   

        $statement->execute();
        $statement->closeCursor();
    }

    
    public static function update_User($user) {
         $db = DatabaseConnection::getDB();
        /* @var $user User */
        $query = 'Update users
            set uName = :uName,
            fName = :fName,
            lName = :lName,
            email = :email,
            password = :password
            where uName = :uName';

        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $user->getUName());
        $statement->bindValue(':fName', $user->getFName());
        $statement->bindValue(':lName', $user->getLName());
        $statement->bindValue(':email', $user->getEmail());
        $statement->bindValue(':password', $user->getPassword());

        $statement->execute();
        $statement->closeCursor();
    }

    public static function delete_events($eventID) {
        $db = DatabaseConnection::getDB();
    $query = 'DELETE FROM events
              WHERE eventID = :eventID';
    $statement = $db->prepare($query);
    $statement->bindValue(':eventID', $eventID);
    $statement->execute();
    $statement->closeCursor();

        
    }

    public static function logEvent($users, $event_id, $date_forEvent) {
       
         $db = DatabaseConnection::getDB();
        $query = 'INSERT INTO loggedevents
            (fk_user, fk_events , date)
             VALUES
             (:users, :event_id, :date_forEvent)';
        $statement = $db->prepare($query);
        $statement->bindValue(':users', $users);
        $statement->bindValue(':event_id', $event_id);
        $statement->bindValue(':date_forEvent', $date_forEvent);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function addSurvey($f,$userSelected,$date_forSurvey) {
     $db = DatabaseConnection::getDB();

        $query = 'INSERT INTO survey
                     ( fk_user, quality , recommend , comments, date)
                  VALUES
                     (:fk_user, :quality, :recommend, :comments, :date)';
        $statement = $db->prepare($query);
        $statement->bindValue(':fk_user', $userSelected);
        $statement->bindValue(':quality', $f->getQuality());
        $statement->bindValue(':recommend', $f->getRecommend());
        $statement->bindValue(':comments', $f->getComments());
        $statement->bindValue(':date', $date_forSurvey);
        
        
   

        $statement->execute();
        $statement->closeCursor();
    }

    public static function getAllSurveys() {
        
        $db = DatabaseConnection::getDB();
       $query = 'SELECT * FROM survey';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
       
        return $results;
     }
     
     public static function get_comments_by_username($uName) {
      $db = DatabaseConnection::getDB();
        $query = 'SELECT * FROM comments where commentTo = :uName';
        $statement = $db->prepare($query);
        $statement->bindValue(':uName', $uName);
        $statement->execute();
        $comments = $statement->fetchAll();
        $comments0 = [];
        foreach ($comments as $value) {
            $comments0[$value['CommentID']] = new Comment($value['CommentID'], $value['commentFrom'], $value['commentTo'], $value['commentText'], $value['commentDate']);
        }
        $statement->closeCursor();
        
        return $comments0;
    }

    public static function add_comment($commentFrom, $commentTo, $commentText, $commentDate) 
            {
         $db = DatabaseConnection::getDB();
          $query = 'INSERT INTO comments
                 (commentFrom, commentTo, commentText, commentDate)
              VALUES
                 (:commentFrom, :commentTo, :commentText, :commentDate)';

        $statement = $db->prepare($query);
        
        $statement->bindValue(':commentFrom', $commentFrom);
        $statement->bindValue(':commentTo', $commentTo);
        $statement->bindValue(':commentText', $commentText);
        $statement->bindValue(':commentDate', $commentDate);

        $statement->execute();
        $statement->closeCursor();
    }

    public static function select_servey($fk_user) {
        
           $db = DatabaseConnection::getDB();
    $query = 'SELECT *
              FROM survey
            Where fk_user = :fk_user';
    
         $statement = $db->prepare($query);
        $statement->bindValue(':fk_user', $fk_user);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    }
        
        
    }












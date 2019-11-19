<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sweetDB
 *
 * @author Paula
 */
class sweetDB {
    public static function get_sweetTypes(){
         $db = DatabaseConnection::getDB();
      $query = 'SELECT * from sweetstype';
      $statement = $db->prepare($query);
      $statement->execute();
      $results =  $statement->fetchAll();
      $statement->closeCursor();
      
      if(!empty($results))
      {
        foreach($results as $result)
        {
            $s = new sweetType;
            $s->setSweetTypeID($result['sweetTypeID']);
            $s->setSweetTypeName($result['sweetTypeName']);
            $sweetType[] = $s;
        }
        return $sweetType;
      }
      else
      {
          return null;
      }
    }
 

public static function get_sweetsType($sweetTypeID){
    
     $db = DatabaseConnection::getDB();
    $query = '
        SELECT *
        FROM sweets 
           INNER JOIN sweetstype 
           ON sweets.sweetTypeID = sweetstype.sweetTypeID
        WHERE sweets.sweetTypeID = :sweetTypeID';
    
        $statement = $db->prepare($query);
        $statement->bindValue(':sweetTypeID', $sweetTypeID);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    
}

    public static function getSweetView($sweetsID) {
         $db = DatabaseConnection::getDB();
    $query = 'SELECT *
              FROM sweets
            Where sweetsID = :sweetsID';
    
         $statement = $db->prepare($query);
        $statement->bindValue(':sweetsID', $sweetsID);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    }

    public static function getAllEvents() {
        $db = DatabaseConnection::getDB();
       $query = 'SELECT * FROM events';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
       
        return $results;
     }
     
     public static function getEvent($event_id) {
         $db = DatabaseConnection::getDB();
    $query = 'SELECT *
              FROM events
            Where eventID = :eventID';
    
         $statement = $db->prepare($query);
        $statement->bindValue(':eventID', $event_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    }
      

    }
       

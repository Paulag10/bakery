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
    
//     $db = DatabaseConnection::getDB();
//    $query = 'SELECT * FROM categories
//              ORDER BY categoryID';
//   
//        $statement = $db->prepare($query);
//        $statement->execute();
//        $result = $statement->fetchAll();
//        $statement->closeCursor();
//        return $result;
//   
//}

public static function get_sweetsType($sweetTypeID){
    
     $db = DatabaseConnection::getDB();
    $query = '
        SELECT *
        FROM products 
           INNER JOIN categories 
           ON products.categoryID = categories.categoryID
        WHERE products.categoryID = :category_id';
    
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $sweetTypeID);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    
}
}

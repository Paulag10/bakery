<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Paula
 */
class User {
     private $fName, $lName, $uName, $email, $password;
     function __construct($fName, $lName, $uName, $email, $password) {
         $this->fName = $fName;
         $this->lName = $lName;
         $this->uName = $uName;
         $this->email = $email;
         $this->password = $password;
     }
     function getFName() {
         return $this->fName;
     }

     function getLName() {
         return $this->lName;
     }

     function getUName() {
         return $this->uName;
     }

     function getEmail() {
         return $this->email;
     }

     function getPassword() {
         return $this->password;
     }

     function setFName($fName) {
         $this->fName = $fName;
     }

     function setLName($lName) {
         $this->lName = $lName;
     }

     function setUName($uName) {
         $this->uName = $uName;
     }

     function setEmail($email) {
         $this->email = $email;
     }

     function setPassword($password) {
         $this->password = $password;
     }



}

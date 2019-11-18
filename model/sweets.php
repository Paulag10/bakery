<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sweets
 *
 * @author Paula
 */
class sweets {
     private $sweetsID, $sweetTypeID, $sweetsCode,$sweetsName, $description, $listPrice;
     function __construct($sweetsID, $sweetTypeID, $sweetsCode, $sweetsName, $description, $listPrice) {
         $this->sweetsID = $sweetsID;
         $this->sweetTypeID = $sweetTypeID;
         $this->sweetsCode = $sweetsCode;
         $this->sweetsName = $sweetsName;
         $this->description = $description;
         $this->listPrice = $listPrice;
     }
     function getSweetsID() {
         return $this->sweetsID;
     }

     function getSweetTypeID() {
         return $this->sweetTypeID;
     }

     function getSweetsCode() {
         return $this->sweetsCode;
     }

     function getSweetsName() {
         return $this->sweetsName;
     }

     function getDescription() {
         return $this->description;
     }

     function getListPrice() {
         return $this->listPrice;
     }

     function setSweetsID($sweetsID) {
         $this->sweetsID = $sweetsID;
     }

     function setSweetTypeID($sweetTypeID) {
         $this->sweetTypeID = $sweetTypeID;
     }

     function setSweetsCode($sweetsCode) {
         $this->sweetsCode = $sweetsCode;
     }

     function setSweetsName($sweetsName) {
         $this->sweetsName = $sweetsName;
     }

     function setDescription($description) {
         $this->description = $description;
     }

     function setListPrice($listPrice) {
         $this->listPrice = $listPrice;
     }
  




}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categories
 *
 * @author Paula
 */
class categories {
   private $categorieId, $categorieName;
   function __construct($categorieId, $categorieName) {
       $this->categorieId = $categorieId;
       $this->categorieName = $categorieName;
   }
   function getCategorieId() {
       return $this->categorieId;
   }

   function getCategorieName() {
       return $this->categorieName;
   }

   function setCategorieId($categorieId) {
       $this->categorieId = $categorieId;
   }

   function setCategorieName($categorieName) {
       $this->categorieName = $categorieName;
   }



}

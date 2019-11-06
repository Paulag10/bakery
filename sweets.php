<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author Paula
 */
class product {
  private $productId, $categoryID, $productCode, $description, $listPrice;
  function __construct($productId, $categoryID, $productCode, $description, $listPrice) {
      $this->productId = $productId;
      $this->categoryID = $categoryID;
      $this->productCode = $productCode;
      $this->description = $description;
      $this->listPrice = $listPrice;
      
  }
  function getProductId() {
      return $this->productId;
  }

  function getCategoryID() {
      return $this->categoryID;
  }

  function getProductCode() {
      return $this->productCode;
  }

  function getDescription() {
      return $this->description;
  }

  function getListPrice() {
      return $this->listPrice;
  }

  function setProductId($productId) {
      $this->productId = $productId;
  }

  function setCategoryID($categoryID) {
      $this->categoryID = $categoryID;
  }

  function setProductCode($productCode) {
      $this->productCode = $productCode;
  }

  function setDescription($description) {
      $this->description = $description;
  }

  function setListPrice($listPrice) {
      $this->listPrice = $listPrice;
  }



}

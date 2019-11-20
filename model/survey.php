<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of survey
 *
 * @author Paula
 */
class survey {
      private $sur_id, $fk_user, $quality , $recommend, $comments;
      function __construct($quality, $recommend, $comments) {
          $this->quality = $quality;
          $this->recommend = $recommend;
          $this->comments = $comments;
      }
      function getSur_id() {
          return $this->sur_id;
      }

      function getFk_user() {
          return $this->fk_user;
      }

      function getQuality() {
          return $this->quality;
      }

      function getRecommend() {
          return $this->recommend;
      }

      function getComments() {
          return $this->comments;
      }

      function setSur_id($sur_id) {
          $this->sur_id = $sur_id;
      }

      function setFk_user($fk_user) {
          $this->fk_user = $fk_user;
      }

      function setQuality($quality) {
          $this->quality = $quality;
      }

      function setRecommend($recommend) {
          $this->recommend = $recommend;
      }

      function setComments($comments) {
          $this->comments = $comments;
      }


}









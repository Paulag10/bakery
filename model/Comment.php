<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 *
 * @author Paula
 */
class Comment {
     private $CommentID, $commentFrom, $commentTo, $commentText;
     function __construct($commentFrom, $commentTo, $commentText) {
         $this->commentFrom = $commentFrom;
         $this->commentTo = $commentTo;
         $this->commentText = $commentText;
     }
     function getCommentID() {
         return $this->CommentID;
     }

     function getCommentFrom() {
         return $this->commentFrom;
     }

     function getCommentTo() {
         return $this->commentTo;
     }

     function getCommentText() {
         return $this->commentText;
     }

     function setCommentID($CommentID) {
         $this->CommentID = $CommentID;
     }

     function setCommentFrom($commentFrom) {
         $this->commentFrom = $commentFrom;
     }

     function setCommentTo($commentTo) {
         $this->commentTo = $commentTo;
     }

     function setCommentText($commentText) {
         $this->commentText = $commentText;
     }



}

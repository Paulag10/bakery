<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event
 *
 * @author Paula
 */
class event {
    private $eventID, $eventName, $eventCode, $eventLocation, $eventTime, $eventDiscription, $eventCost;
    
    function __construct($eventID, $eventName, $eventCode, $eventLocation, $eventTime, $eventDiscription, $eventCost) {
        $this->eventID = $eventID;
        $this->eventName = $eventName;
        $this->eventCode = $eventCode;
        $this->eventLocation = $eventLocation;
        $this->eventTime = $eventTime;
        $this->eventDiscription = $eventDiscription;
        $this->eventCost = $eventCost;
    }
    function getEventID() {
        return $this->eventID;
    }

    function getEventName() {
        return $this->eventName;
    }

    function getEventCode() {
        return $this->eventCode;
    }

    function getEventLocation() {
        return $this->eventLocation;
    }

    function getEventTime() {
        return $this->eventTime;
    }

    function getEventDiscription() {
        return $this->eventDiscription;
    }

    function getEventCost() {
        return $this->eventCost;
    }

    function setEventID($eventID) {
        $this->eventID = $eventID;
    }

    function setEventName($eventName) {
        $this->eventName = $eventName;
    }

    function setEventCode($eventCode) {
        $this->eventCode = $eventCode;
    }

    function setEventLocation($eventLocation) {
        $this->eventLocation = $eventLocation;
    }

    function setEventTime($eventTime) {
        $this->eventTime = $eventTime;
    }

    function setEventDiscription($eventDiscription) {
        $this->eventDiscription = $eventDiscription;
    }

    function setEventCost($eventCost) {
        $this->eventCost = $eventCost;
    }



}


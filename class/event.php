<?php
class Event {
  private $eventName;
  private $eventRegion;
  private $eventDate;
  private $eventComment;

  public function __construct($eventName, $eventRegion, $eventDate, $eventComment) {
    $this->eventName = $eventName;
    $this->eventRegion = $eventRegion;
    $this->eventDate = $eventDate;
    $this->eventComment = $eventComment;
  }

  public function getEventName() {
    return $this->eventName;
  }

  public function setEventName($newEventName) {
    $this->eventName = $newEventName;
  }

  public function getEventRegion() {
    return $this->eventRegion;
  }

  public function setEventRegion($newEventRegion) {
    $this->eventRegion = $newEventRegion;
  }

  public function getEventDate() {
    return $this->eventDate;
  }

  public function setEventDate($newEventDate) {
    $this->eventDate = $newEventDate;
  }

  public function getEventComment() {
    return $this->eventComment;
  }

  public function setEventComment($newEventComment) {
    $this->eventComment = $newEventComment;
  }

  public function convertToArray() {
    return [$this->eventName, $this->eventRegion, $this->eventDate, $this->eventComment];
  }
}


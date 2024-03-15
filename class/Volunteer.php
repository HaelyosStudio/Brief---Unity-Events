<?php
class Volunteer {
  private $firstName;
  private $email;
  private $lastName;
  private $age;
  private $gender;
  private $uniqueCode;
  private $region;
  private $dayAvailability;
  private $hourlyAvailability;
  private $job;
  private $role;

  public function __construct($firstName, $email, $lastName, $age, $gender, $uniqueCode, $region, $dayAvailability, $hourlyAvailability, $job, $role) {
    $this->firstName = $firstName;
    $this->email = $email;
    $this->lastName = $lastName;
    $this->age = $age;
    $this->gender = $gender;
    $this->uniqueCode = $uniqueCode;
    $this->region = $region;
    $this->dayAvailability = $dayAvailability;
    $this->hourlyAvailability = $hourlyAvailability;
    $this->job = $job;
    $this->role = $role;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function setFirstName($newFirstName) {
    $this->firstName = $newFirstName;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($newEmail) {
    $this->email = $newEmail;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function setLastName($newLastName) {
    $this->lastName = $newLastName;
  }

  public function getAge() {
    return $this->age;
  }

  public function setAge($newAge) {
    $this->age = $newAge;
  }

  public function getGender() {
    return $this->gender;
  }

  public function setGender($newGender) {
    $this->gender = $newGender;
  }

  public function getUniqueCode() {
    return $this->uniqueCode;
  }

  public function setUniqueCode($newUniqueCode) {
    $this->uniqueCode = $newUniqueCode;
  }

  public function getRegion() {
    return $this->region;
  }

  public function setRegion($newRegion) {
    $this->region = $newRegion;
  }

  public function getDayAvailability() {
    return $this->dayAvailability;
  }

  public function setDayAvailability($newDayAvailability) {
    $this->dayAvailability = $newDayAvailability;
  }

  public function getHourlyAvailability() {
    return $this->hourlyAvailability;
  }

  public function setHourlyAvailability($newHourlyAvailability) {
    $this->hourlyAvailability = $newHourlyAvailability;
  }

  public function getJob() {
    return $this->job;
  }

  public function setJob($newJob) {
    $this->job = $newJob;
  }

  public function getRole() {
    return $this->role;
  }

  public function setRole($newRole) {
    $this->role = $newRole;
  }

  public function convertToArray() {
    return [$this->firstName, $this->email, $this->lastName, $this->age, $this->gender, $this->uniqueCode, $this->region, $this->dayAvailability, $this->hourlyAvailability, $this->job, $this->role];
  }
}


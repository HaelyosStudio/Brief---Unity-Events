<?php
require_once './../class/event.php';
require_once './../class/db.php';

if (!empty($_POST) && isset($_POST['eventName'], $_POST['eventRegion'], $_POST['eventDate'], $_POST['eventComment'])) {

    $eventName = htmlspecialchars($_POST['eventName']);
    $eventRegion = htmlspecialchars($_POST['eventRegion']);
    $eventDate = htmlspecialchars($_POST['eventDate']);
    $eventComment = htmlspecialchars($_POST['eventComment']);

    $newEvent = new Event($eventName, $eventRegion, $eventDate, $eventComment);

    $newDbConnection = new Db('./../db/events.csv');

    $csv = $newDbConnection->openCsv();

    if ($csv !== false) {

        $newDbConnection->writeIntoCsv($csv, $newEvent->convertToArray());

        $newDbConnection->closeCsv($csv);

        header("Location: ./../pages/adminLoggedMain.php?successEventCreation=1");

        exit;
    }
}

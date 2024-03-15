<?php

session_start();

require_once './../class/admin.php';
require_once './../class/db.php';

$mdp = '1234admin';
$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
echo($mdpHash);

if (!empty($_POST) && isset($_POST['adminUsername']) && isset($_POST['adminPassword'])) {

    $username = htmlspecialchars($_POST['adminUsername']);
    $password = htmlspecialchars($_POST['adminPassword']);

    $newDbConnection = new Db('./../db/admins.csv');

    $registeredUsers = $newDbConnection->readFromCsv();

    foreach ($registeredUsers as $registeredUser) {
        $registeredUserUsername = $registeredUser[0];
        $registeredUserPassword = $registeredUser[1];
        $registeredUserRole = $registeredUser[2];

        if ($username === $registeredUserUsername && password_verify($password, $registeredUserPassword)) {

            $authenticatedUser = new Admin($registeredUserUsername, $registeredUserPassword, $registeredUserRole);

            $_SESSION['isAuthenticated'] = true;
            $_SESSION['adminUsername'] = $authenticatedUser->getUsername();
            $_SESSION['role'] = $registeredUserRole;

            header("Location: ./../pages/adminLoggedMain.php");

            exit;
        }
    }

    header("Location: ./../index.php?errorSignIn=0");

    exit;
}

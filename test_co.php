<?php
include "test_version1.php";
$db = opencon();

$sqlQuery = 'SELECT * FROM teams';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute();
$ga_users = $usersStatement->fetchAll();

foreach ($ga_users as $lm_user) {
    echo $lm_user['team'];
  }
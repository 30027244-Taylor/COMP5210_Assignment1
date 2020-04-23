<?php

    // Database credentials saved into php variables
    $user = "a3002724_user";
    $password = "Toiohomai1234";
    $db = "a3002724_people";

    // Creates mysqli object to connect to databases
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Create variable that holds all data from the database
    $result = $connection->query("select * from details") or die($connection->error());

?>
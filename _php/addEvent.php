<?php

function addEvent($name, $date) {
    $post = [
        'name' => $name,
        'date' => $date,
    ];

    $ch = curl_init('localhost:8080/events');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);
}

addEvent($_POST["event-name"], $_POST["event-date"]);
header("Location: /");
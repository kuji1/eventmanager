<?php

function deleteEvent($id) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "localhost:8080/events/$id");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
}

deleteEvent($_POST["event-id"]);
header("Location: /");
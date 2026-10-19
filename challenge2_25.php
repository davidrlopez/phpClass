<?php

include __DIR__ . '/challenge2_25.html';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";

    if ($name !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid";
    } else {
        echo "Invalid";
    }
}

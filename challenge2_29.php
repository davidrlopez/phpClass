
<?php

include __DIR__ . '/challenge2_25.html';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $age = $_POST["age"] ?? "";

    if ($name !== "" && filter_var($email, FILTER_VALIDATE_EMAIL) && $age >= 0) {
        echo "Valid";
    } else {
        echo "Invalid";
    }
}

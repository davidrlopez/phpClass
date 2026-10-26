<?php

include __DIR__ . '/challenge2_30.html';
require_once __DIR__ . '/vendor/autoload.php';

$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.Allowed', 'h1,strong,a[href]');
$config->set('URI.AllowedSchemes', 'http,https');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";

    if ($name !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid";
        $purifier = new HTMLPurifier($config);
        echo $purifier->purify($name);
    } else {
        echo "Invalid";
    }
}

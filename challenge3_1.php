<?php

session_start();

if (isset($_GET['reset'])) {
    $_SESSION['count'] = 0;
    header('Location: challenge3_1.php');
    exit;
}

$_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
$count = $_SESSION['count'];

include __DIR__ . '/challenge3_1.html';

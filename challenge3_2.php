<?php

session_start();
$step = (int) ($_GET['step'] ?? 1);
$fields = [1 => ['name', 'email', 'phone'], 2 => ['cycle', 'year', 'modules']];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($fields[$step] ?? [] as $field) {
        $_SESSION['wizard'][$field] = $_POST[$field] ?? '';
    }
    if (isset($_POST['confirm'])) {
        unset($_SESSION['wizard']);
        header("Location: challenge3_2.php?step=4");
        exit;
    }
    $next = isset($_POST['back']) ? $step - 1 : $step + 1;
    header("Location: challenge3_2.php?step=$next");
    exit;
}
include __DIR__ . '/challenge3_2.html';

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST["fullName"] ?? "";
    $source = (array) $_POST["source"] ?? "";
}
include __DIR__ . '/challenge2_28.html';

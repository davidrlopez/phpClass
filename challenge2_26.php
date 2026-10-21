<?php

include __DIR__ . '/challenge2_26.html';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedList = (array) ($_POST["selected"] ?? []);
}

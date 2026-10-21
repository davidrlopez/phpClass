<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstOp = $_POST["firstOp"] ?? "";
    $secondOp = $_POST["secondOp"] ?? "";
    $opType = $_POST["selected"] ?? "";
    if (!is_numeric($firstOp) || !is_numeric($secondOp)) {
        $result = "Operands must be numbers";
    } else {
        switch ($opType) {
            case 'X':
                $result = $firstOp * $secondOp;
                break;
            case '/':
                $result = $secondOp == 0 ? "Cannot divide by zero" : $firstOp / $secondOp;
                break;
            case '+':
                $result = $firstOp + $secondOp;
                break;
            case '-':
                $result = $firstOp - $secondOp;
                break;
            default:
                $result = "Unknown operation";
        }
    }
}
include __DIR__ . '/challenge2_27.html';

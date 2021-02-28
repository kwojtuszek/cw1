<?php
require_once dirname(__FILE__).'/../config_credit.php';

// Pobranie parametru

$x = $_REQUEST ["x"];
$y = $_REQUEST ["y"];
$z = $_REQUEST ["z"];

// Walidacja

if (! (isset($x) && isset($y) && isset($z))) {
    $messages [] = "Błędne wywołanie aplikacji. Brakuje jednego lub kilku parametrów.";
}

if ($x == "") {
    $messages [] = "Nie podano wysokości kredytu.";
}
if ($y == "") {
    $messages [] = "Nie podano wartości oprocentowania.";
}
if ($z == "") {
    $messages [] = "Nie podano okresu kredytowania.";
}

if (empty($messages)) {
    if (! is_numeric($x)) {
        $messages [] = "Wysokość kredytu nie jest liczbą!";
    }
    if (! is_numeric($y)) {
        $messages [] = "Oprocentowanie nie jest liczbą!";
    }
    if (! is_numeric($z)) {
        $messages [] = "Okres kredytowania nie jest liczbą!";
    }
}

// Wykonanie zadania

if (empty($messages)) {

$x = intval($x);
$y = floatval($y);
$z = intval($z);

$result = (($y/100 * $x) + $x) / ($z*12);
}

// Wywołanie widoku

include 'credit_view.php';
<?php

require_once "Log.php";

$log = new Log("log.txt");

$log->writeLine("E", "Ha habido un error");
$log->writeLine("I", "TOdo correcto");
$log->writeLine("W", "Ha habido un warning");

$log->close();

?>

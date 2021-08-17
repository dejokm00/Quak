<?php

require_once 'Ente.php';
require_once 'MoorEnte.php';
require_once 'GummiEnte.php';
require_once 'StockEnte.php';


$myMoorEnte = new MoorEnte();

$myMoorEnte->anzeigen();

$myMoorEnte->quaken();

$myGummiEnte = new GummiEnte();

$myGummiEnte->quaken();

?>
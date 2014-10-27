<?php

use motor\LancerX as LancerX;
use motor\Ford as Ford;

require_once "autoload.php";

$lancer = new LancerX();
$lancer->show();


$ford = new Ford();
$ford->show();
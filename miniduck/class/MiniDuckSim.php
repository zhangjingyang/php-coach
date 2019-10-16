<?php
include_once 'WildDuck.php';
include_once 'ToyDuck.php';

$duck = new WildDuck();
$duck->performFly();
echo '<hr>';
$toyduck = new ToyDuck();
$toyduck->performFly();

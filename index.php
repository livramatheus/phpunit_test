<?php

use Livramatheus\PhpunitTest\Classes\Game;
use Livramatheus\PhpunitTest\Classes\Player;

require './vendor/autoload.php';

$Matheus = new Player();
$Matheus->setEmail('matheus@gmail.com');
$Matheus->setNickName('matt94');
$Matheus->setAge(27);


$Game01 = new Game($Matheus);
$Game01->kill();
$Game01->kill();
$Game01->takeDamage();
$Game01->kill();
$Game01->takeDamage();
$Game01->takeDamage();
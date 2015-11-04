<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

use \Sandbox\Core\Actor\Creature;
use \Sandbox\Core\Actor\Creature\Imp;
use \Sandbox\Core\Actor\Creature\ZombieMan;
use \Sandbox\Core\Actor\Creature\Cacodemon;
use \Sandbox\Core\SpaceTime\Scenario;
use \Sandbox\Core\SpaceTime\Coordinate;
use \Sandbox\Representation\Board;

$hangar = new Scenario('Hangar');

$hangar->place(new Cacodemon, new Coordinate(1, 8));
$hangar->place(new Cacodemon, new Coordinate(5, 15));
$hangar->place(new Imp, new Coordinate(2, 19));
$hangar->place(new ZombieMan, new Coordinate(18, 18));

$board = new Board($hangar, new Coordinate(0, 0), new Coordinate(20, 20));
echo $board->render();

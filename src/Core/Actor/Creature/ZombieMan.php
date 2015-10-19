<?php

namespace Sandbox\Core\Actor\Creature;

use Sandbox\Core\Actor\Creature;

class ZombieMan extends Creature
{
    public function __construct()
    {
        $this->_generateId();
        $this->_setName('Zombie Man');
        $this->_setHitPoints(20);
    }
}
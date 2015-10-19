<?php

namespace Sandbox\Core\Actor\Creature;

use Sandbox\Core\Actor\Creature;

class Imp extends Creature
{
    public function __construct()
    {
        $this->_generateId();
        $this->_setName('IMP');
        $this->_setHitPoints(80);
    }
}
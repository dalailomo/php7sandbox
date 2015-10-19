<?php

namespace Sandbox\Core\Actor\Creature;

use Sandbox\Core\Actor\Creature;

class Cacodemon extends Creature
{
    public function __construct()
    {
        $this->_generateId();
        $this->_setName('Cacodemon');
        $this->_setHitPoints(500);
    }
}
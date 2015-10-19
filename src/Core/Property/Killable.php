<?php

namespace Sandbox\Core\Property;


trait Killable
{
    protected $_hitPoints;

    protected function _setHitPoints(\int $hitPoints)
    {
        $this->_hitPoints = $hitPoints;
    }

    public function getHitPoints() : \int
    {
        return $this->_hitPoints;
    }
}

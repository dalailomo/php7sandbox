<?php

namespace Sandbox\Core\Property;

use Sandbox\Core\SpaceTime\Coordinate;

trait Sizable
{
    private $_coordinateStart;
    private $_coordinateEnd;

    protected function _setDimension(Coordinate $start, Coordinate $end)
    {
        $this->_coordinateStart = $start;
        $this->_coordinateEnd = $end;
    }

    public function getStartDimension() : Coordinate
    {
        return $this->_coordinateStart;
    }

    public function getEndDimension() : Coordinate
    {
        return $this->_coordinateEnd;
    }
}
<?php

namespace Sandbox\Core\SpaceTime;

class Coordinate
{
    private $_x;
    private $_y;

    public function __construct(\int $x = 0, \int $y = 0)
    {
        $this->_x = $x;
        $this->_y = $y;
    }

    public function setX(\int $x) : self
    {
        $this->_x = $x;

        return $this;
    }

    public function setY(\int $y) : self
    {
        $this->_y = $y;

        return $this;
    }

    public function getX() : int
    {
        return $this->_x;
    }

    public function getY() : int
    {
        return $this->_y;
    }

    public function match(int $x, int $y)
    {
        return ($x === $this->_x AND $y === $this->_y);
    }
}
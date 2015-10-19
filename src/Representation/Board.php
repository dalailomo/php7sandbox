<?php

namespace Sandbox\Representation;

use Sandbox\Core\Property\Sizable;
use Sandbox\Core\SpaceTime\Scenario;
use Sandbox\Core\SpaceTime\Coordinate;

class Board
{
    use Sizable;

    private $_scenario;
    private $_board;

    private function _placeInstanceIn(\int $x, \int $y) : \string
    {
        foreach ($this->_scenario->getInstanceCollection() as $element) {
            if ($element['position']->match($x, $y))
                return $element['instance']->getInitial();
        }

        return '.';
    }

    private function _buildBoard()
    {
        $y = 0;
        for ($x = $this->getStartDimension()->getX(); $x <= $this->getEndDimension()->getX(); $x++) {
            $this->_board .= $this->_placeInstanceIn($x, $y);
            if ($x === $this->getEndDimension()->getX() AND $y < $this->getEndDimension()->getY()) {
                $x = -1;
                $y++;
                $this->_board .= PHP_EOL;
            }
        }
    }

    public function __construct(Scenario $scenario, Coordinate $start, Coordinate $end)
    {
        $this->_scenario = $scenario;
        $this->_setDimension($start, $end);
        $this->_buildBoard();
    }

    public function render() : \string
    {
        return $this->_board;
    }
}

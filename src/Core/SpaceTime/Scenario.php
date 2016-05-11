<?php

namespace Sandbox\Core\SpaceTime;

use Sandbox\Core\Property\Recognizable;

class Scenario
{
    use Recognizable;

    protected $_instanceCollection;

    public function __construct(string $name)
    {
        $this->_name = $name;
        $this->_instanceCollection = new \ArrayObject;
        $this->_generateId();
    }

    public function place($instance, Coordinate $coordinate)
    {
        $this->_instanceCollection->append([
            'instance' => $instance,
            'position' => $coordinate
        ]);
    }

    public function getInstanceCollection()
    {
        return $this->_instanceCollection;
    }
}
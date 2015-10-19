<?php

namespace Sandbox\Core\Property;

trait Recognizable
{
    private $_id;
    private $_name;

    protected function _generateId()
    {
        $this->_id = uniqid(md5(microtime()));
    }

    protected function _setName(\string $name)
    {
        $this->_name = $name;
    }

    public function getId() : \string
    {
        return $this->_id;
    }

    public function getName() : \string
    {
        return $this->_name;
    }

    public function getInitial() : \string
    {
        return $this->_name[0];
    }
}

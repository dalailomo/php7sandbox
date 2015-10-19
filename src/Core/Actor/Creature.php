<?php

namespace Sandbox\Core\Actor;

use Sandbox\Core\Property\Recognizable;
use Sandbox\Core\Property\Killable;

abstract class Creature
{
    use Recognizable, Killable;
}
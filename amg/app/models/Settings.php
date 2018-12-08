<?php

use Phalcon\Mvc\Model;

class Settings extends Model
{

    public $id;
    public $name;
    public $value;

    public function initialize()
    {
        $this->setSource("settings");
    }

}
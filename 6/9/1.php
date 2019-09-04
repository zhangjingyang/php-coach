<?php
abstract class BaseAction
{
    abstract public function log();
}

class Action extends BaseAction
{
    public function log()
    {
        echo 'log';
    }
}

(new Action())->log();

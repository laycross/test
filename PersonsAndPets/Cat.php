<?php
/**
 * Created by PhpStorm.
 * User: ejem1
 * Date: 11-Nov-18
 * Time: 3:03 PM
 */

class Cat implements Pet
{
    use NameTrait;

    private $type = 'cat';

    public function getType()
    {
        return $this->type;
    }
}
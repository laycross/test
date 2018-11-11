<?php
/**
 * Created by PhpStorm.
 * User: ejem1
 * Date: 11-Nov-18
 * Time: 3:02 PM
 */

class Dog implements Pet
{
    use NameTrait;

    private $type = "dog";

    public function getType()
    {
        return $this->type;
    }
}
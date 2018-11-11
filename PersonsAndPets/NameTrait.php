<?php
/**
 * Created by PhpStorm.
 * User: ejem1
 * Date: 11-Nov-18
 * Time: 3:08 PM
 */

trait NameTrait
{
    private $name;

    /**
     * NameTrait constructor.
     * @param $name
     */
    public function __construct()
    {
        $this->name = self::generateRandomString();
    }


    public function getName()
    {
        return $this->name;
    }

    private static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ejem1
 * Date: 11-Nov-18
 * Time: 4:01 PM
 */

class Person
{
    /**
     * @var Pet[]
     */
    private $pets;

    public function addPet(Pet $pet)
    {
        foreach ($this->pets as $myPet) {
            if ($pet->getName() === $myPet->getName()) {
                return;
            }
        }
        $this->pets[] = $pet;
    }

    public function getPets()
    {
        $petsArray = [];

        foreach ($this->pets as $pet) {
            $petsArray[$pet->getName()] = $pet->getType();
        }

        return $petsArray;
    }
}
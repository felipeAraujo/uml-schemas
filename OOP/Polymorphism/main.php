<?php declare(strict_types=1);

abstract class Animal
{
    abstract public function makeSound();
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "meow!";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "bark!";
    }
}

/**
 * @var Animal[]
 */
$animals = [
    new Cat(),
    new Dog(),
];

foreach ($animals as $animal) {
    $animal->makeSound();
    echo PHP_EOL;
}

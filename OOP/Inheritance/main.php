<?php declare(strict_types = 1);

class Food
{
    public function __construct(
        private string $name,
        private int $calories,
    ) {
        //
    }

    public function calories(): int
    {
        return $this->calories;
    }
}

abstract class Animal
{
    protected int $caloriesNeeded;
    protected int $caloriesConsumed;

    public function __construct()
    {
        $this->caloriesConsumed = 0;
    }

    public function feed(Food $food): void
    {
        $this->caloriesConsumed += $food->calories();
    }

    public abstract function makeSound(): void;
}

class Cat extends Animal
{
    public function __construct()
    {
        parent::__construct();

        $this->caloriesNeeded = 500;
    }

    public function makeSound(): void
    {
        echo 'meow!';
    }
}

$catFood = new Food('cat food', 200);
$cat = new Cat();

$cat->feed($catFood);

var_dump($cat);

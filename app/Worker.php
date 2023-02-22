<?php

namespace App;

abstract class Worker implements WorkerInterface
{
    private string $name;
    private int $age;
    private array $hours;

    private string $position;

    private string $positionFuture;

    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;        
    }

    public function work()
    {
        print_r("\n Hello, i'm worker!!! \n");
    }

    public function setPosition($value)
    {
        $this->position = $value;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHours(): array
    {
        return $this->hours;
    }
}
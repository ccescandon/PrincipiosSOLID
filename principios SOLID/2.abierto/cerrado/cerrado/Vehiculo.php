<?php

namespace GSoares\SOLID\OpenClosed;

abstract class Vehicle 
{
    public function run(){}
    abstract public function turnOn();
}

class Motorcycle extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the motorcycle';
    } 
}

class Car extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the car';
    }
}

class Truck extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the truck';
    }
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        $vehicle->turnOn();
        $vehicle->run();
    }
}
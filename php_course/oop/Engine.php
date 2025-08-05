<?php 

// Dpendency Injection DI design pattern

class Engine{

    public function start()
    {
        return 'Start';
    }
}

class Fuel
{
    private $fuel;

    public function full($fuel)
    {
       $this->fuel = $fuel;

       return $this;
    }
}


class Car
{
    private $engine;
    private $fuel;

    public function __construct(Engine $engine , Fuel $fuel)
    {
        $this->engine = $engine;
        $this->fuel = $fuel;

    }

    public function makeFull($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function startCar()
    {
       return $this->engine->start();
    }
}

$engine = new Engine();
$fuel = new Fuel();


$corolla = new Car($engine , $fuel);

echo $corolla->makeFull("Oman Oil")->startCar();
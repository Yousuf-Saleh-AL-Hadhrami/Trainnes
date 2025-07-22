<?php 

abstract class Lecturer {

    public $name;
    public $age;
    public $address;

    public function sayHello($name){

        return "Hello ". $name;
    }

    abstract public function sign(bool $singnature);
}
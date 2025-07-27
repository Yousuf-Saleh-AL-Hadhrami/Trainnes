<?php 

abstract class Animal
{
    protected abstract function makeSound($sound);
    
}


class Cat extends Animal
{
   public function makeSound($sound)
   {
     return $sound;
   }

   public function getSound(){


   }
}


class Dog extends Animal
{
   public function makeSound($sound)
   {
     return $sound;
   }
}


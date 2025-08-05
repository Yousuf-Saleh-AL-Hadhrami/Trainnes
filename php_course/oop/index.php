<?php 

require_once "./Person.php";
require_once "./Student.php";
require_once "./Lecturer.php";
require_once "./Animal.php";
require_once "./House.php";



/*

  PHP OOP Concepts:

  - class & obecjts
  - properties & methods 
  - constants & statics
  - $this & self 
  - constructor 
  - inheritance 
  - encapsulation 
  - abstraction 
  - polymorphism 
  - interfaces 
  - traits 
  - namespaces 
  - autoloading 
  - composer 

  - enums 
  - object cloning 
  - magic methods 
  
*/



// Usage
// $p1 = new Person("Yousuf", "Izki", "Programmer");
// $p2 = new Person("Yousuf1", "Izki", "Programmer");
// $p3 = new Person("Yousuf2", "Izki", "Programmer");

$yousuf = new Person(j: "Programmer", add: "Izki" , n: "Yousuf" );
$hind = new Student("Hind","AL Hamra","Programmer","26s19108","IT","Software Engineering",3.9);


// Abstract and polymorphism
$cat = new Cat();
$dog = new Dog();

// Interfaces implementation 

$bayan = new Bayan();
$bayan->stepOne();
$bayan->stepTwo();
$bayan->stepThree();
$bayan->stepFour();
$bayan->stepFive();



// $hiba = new Lecturer(); // can't instantiate an abstract class

// echo $p1->setName("Yousuf")
//          ->setJob("Programmer")
//          ->addBouns(0.05)  // Adding 5% bonus
//          ->setPassword("123456")
//          ->printAll();      // Printing details

//          echo $p2->setName("Yousuf")
//          ->setJob("Programmer")
//          ->addBouns(0.05)  // Adding 5% bonus
//          ->setPassword("123456")
//          ->printAll();      // Printing details


//          echo $p3->setName("Yousuf")
//          ->setJob("Programmer")
//          ->addBouns(0.05)  // Adding 5% bonus
//          ->setPassword("123456")
//          ->printAll();      // Printing details


echo "<br>";
echo "***********************************************";
echo "<br>";

//echo Person::getCounter();  // calling static method 

echo "<br>";


// $hind->gpa = 1.7; // wrong can't access private property from outer files.
// $yousuf->setGpa(1.9)->printAll(); // can't access childs methods from parent class
// echo $hind->setGpa(1.7)->printAll(true);
echo "<br>";

// echo $yousuf->sayHello("Yousuf");
echo "<br>";
//echo $yousuf->sign(false)->printAll();
//echo $hind->sign(false)->printAll();

// Student::GENDER = 25; // constants can not be changed
 
//echo Student::GENDER;

//echo $cat->makeSound("Meow");
//echo $dog->makeSound("Wah Wah");

// echo $bayan->stepOne();
// echo $bayan->stepTwo();
// echo $bayan->toolOne();

$hind->one();
$hind->OneCar();

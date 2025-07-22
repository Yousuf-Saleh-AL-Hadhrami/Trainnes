<?php 
declare(strict_types=1);
/* 
$name = "Yousuf";
$address = "Izki";
$job = "Proigrammer";

function setInfo($n , $address , $job){

    return $n . " " . $address . " " . $job;
}


// Overrding 
$name = "Ali";
$address = "Izki";
$job = "Proigrammer";

echo $name;


echo "<br>";

echo setInfo("Yousuf", "Izki", "Programmer");

*/


function pre($obj){

    echo "<pre>";
       var_dump($obj);
    echo "</pre>";


}


require "./Lecturer.php";

class Person extends Lecturer {

    public $name;
    public $address;
    public $job;
    public $bsalary = 500;
    public $totalSalary = 0;
    protected $password;
    public static $counter = 0;
    public bool $sign;

   public const GENDER = 18;

    public function __construct($n , $add , $j) {
        $this->name = $n;
        $this->address = $add;
        $this->job = $j;

        self::$counter++;
    }

    public function setName($n) {
        $this->name = $n;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setAddress($ad) {
        $this->address = $ad;
        return $this;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setJob(string $j) {
        $this->job = $j;
        return $this;
    }

    public function getJob() {
        return $this->job;
    }

    public function getSalary() {
        return $this->bsalary;
    }

    public function addBouns($per) {
        // Add bonus to the base salary and also keep track of total salary
        $this->bsalary += $this->bsalary * $per;
        $this->totalSalary = $this->bsalary;
        return $this;
    }

    public function deductBouns($per) {
        // Deduct bonus from the salary and update total salary
        $this->bsalary -= $this->bsalary * $per;
        $this->totalSalary = $this->bsalary;
        return $this;
    }

    public function setPassword($pw){
        $this->password =  password_hash($pw , PASSWORD_DEFAULT);

        return $this;
    }

    public function getPassword(){

        return $this->password;
    }

    public function printAll() {

        if($this->sign)
        {

        return "Name : " . $this->getName() . "<br>" .
               "Address : " . $this->getAddress() . " <br>" .
               "Job : " . $this->getJob() . " <br>" .
               "Salary : " . $this->getSalary() . "<br> " .
               "Password : " . $this->getPassword() . "<br> " .
               "Number of objects from this class  : " . Person::$counter . "<br> " .
               "Total Salary : " . $this->totalSalary . "<br>";

        } 

        return "Sign first to print All information";
    }

    public static function getCounter(){

        //$this->getName(); // can not put non-static method inside static method
        //$this->name = "Ali"; // can not put non-static property inside static method
        return self::$counter;
    }

    public function getCounter2(){

        return self::$counter;
    }

    public function sign(bool $singnature)
    {
       $this->sign = $singnature;

       return $this;

    }
}


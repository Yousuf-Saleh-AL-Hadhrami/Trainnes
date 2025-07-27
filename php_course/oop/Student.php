<?php 

require_once "./Person.php";
require_once "./HasHouse.php";
require_once "./HasCar.php";



class Student extends Person{

    use HasHouse, HasCar;
    
    public $student_id;
    public $student_dpt;
    public $student_sps;
    private $gpa;

   public const GENDER = 20;

    public function __construct($n , $add , $j , $stdId , $stdDpt , $stdSps , $gpa)
    {
        parent::__construct($n , $add , $j);

        $this->student_id = $stdId;
        $this->student_dpt = $stdDpt;
        $this->student_sps = $stdSps;
        $this->gpa = $gpa;
    }

    // Method Overrding
    public function printAll()
    {
        return parent::printAll() .
         "Student Id : " . $this->student_id. " <br>" . 
         "Department : " . $this->student_dpt. " <br>" . 
         "Specialization: " . $this->student_sps. " <br>" . 
         "GPA: " . $this->gpa. " <br>" ;


    }

    public function setGpa($gpa){

        $this->gpa = $gpa;

        return $this;
    }




}
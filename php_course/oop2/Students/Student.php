<?php 

namespace Students;

use Persons\Person;

class Student extends Person
{

   public $stdId;

   public function setId($id)
   {
         $this->stdId = $id;
   }

   public function getId()
   {
    return $this->stdId;
   }
}
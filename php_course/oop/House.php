<?php 

interface House
{
   public function stepOne();


   public function stepTwo();


   public function stepThree();


   public function stepFour();


   public function stepFive();


}

interface Tool
{
    public function toolOne();
}

 class Bayan implements House,Tool
{

     public function stepOne()
     {
        return 'Done';
     }

     public function stepTwo()
     {
        return 'Done';
     }

     public function stepThree()
     {
        return 'Done';
     }

     public function stepFour()
     {
        return 'Done';
     }

     public function stepFive()
     {
        return 'Done';
     }

       public function toolOne()
     {
        return 'Steel';
     }
}
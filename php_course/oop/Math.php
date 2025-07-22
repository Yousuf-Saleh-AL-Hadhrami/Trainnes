<?php 

class Math {
   
   public ?array $numbers ;
   public float $sum = 0;
   public float $avg;
   public $max;
   public $min;

   
   public function __construct($nums)
   {
      $this->numbers = $nums;
    
    }

    public function sum(){

        for($i = 0; $i < count($this->numbers); $i++)
        {
             $this->sum += $this->numbers[$i];
        }

        return $this->sum;
    }

    public function sub(){

        for($i = 0; $i < count($this->numbers); $i++)
        {
             $this->sum -= $this->numbers[$i];
        }

        return $this->sum;
    }

     public function multiply(){

        for($i = 0; $i < count($this->numbers); $i++)
        {
             $this->sum *= $this->numbers[$i];
        }

        return $this->sum;
    }

     public function divide(){

        if($this->sum == 0)
        {
           throw new Exception("Invalid Division");

        }

        for($i = 0; $i < count($this->numbers); $i++)
        {

             $this->sum /= $this->numbers[$i];

            
        }

        return $this->sum;
    }

    public function max(){
    
    $max = $this->numbers[0];

for($i = 0; $i < count($this->numbers); $i++) {

    if($this->numbers[$i] > $max){

        $max = $this->numbers[$i];
    }

}

return $max;
    }

public function min(){
    
    $min = $this->numbers[0];

for($i = 0; $i < count($this->numbers); $i++) {

    if($this->numbers[$i] < $min){

        $min = $this->numbers[$i];
    }

}

return $min;


}

    }




$math = new Math([0,0,0]);

try {
    $result = $math->divide();
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}




  


// var_dump($math);
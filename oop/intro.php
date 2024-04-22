<?php

// class Student{
//     public $name='Mariful Islam';
//     public $age=27;

// }
// $obj= new Student();
// echo $obj->name. '</br>';
// echo $obj->age. '</br>';

// class Math{
//     public $a,$b,$c;
//     function sum(){
//         $this->c=$this->a+$this->b;
//         return $this->c;
//     }
//     function substraction(){
//         $this->c=$this->a-$this->b;
//         return $this->c;
//     }
// }
// $math=new Math();
// $math->a=20;
// $math->b=10;
// echo $math->sum();
// echo '</br>';
// echo $math->substraction();

class Math{
    function sum($a,$b,){
        $c=$a+$b;
        return $c;
    }
    function substraction($a,$b,){
        $c=$a-$b;
        return $c;
    }
}
$math=new Math();
echo $math->sum(20,30);
echo '</br>';
echo $math->substraction(20,15);

?>
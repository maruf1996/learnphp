<?php

// class Student{
//     public $name, $subject, $age;

//     function info(){
//         echo $this->name;
//         echo $this->subject;
//         echo $this->age;
//     }
// }

// $info1=new Student();
// $info1->name='Mariful Islam </br>';
// $info1->subject='Web Development </br>';
// $info1->age='28';
// $info1->info();
// echo '</br> </br>';
// $info2=new Student();
// $info2->name='Ariful Islam </br>';
// $info2->subject='Web Design </br>';
// $info2->age='26';
// $info2->info();
// echo '</br> </br>';
// $info3=new Student();
// $info3->name='Harisul Islam </br>';
// $info3->subject='App Development </br>';
// $info3->age='29';
// $info3->info();
// echo '</br> </br>';




// constructor


// class Student{
//     public $name, $subject, $age;

//     function __construct($n='Mariful Islam',$s='Web Development',$a=28){
//         $this->name=$n;
//         $this->subject=$s;
//         $this->age=$a;
//     }

//     function info(){
//         echo $this->name.'</br>';
//         echo $this->subject.'</br>';
//         echo $this->age.'</br> </br>';
//     }
// }

// $info=new Student();
// $info->info();
// $info1=new Student('Ariful Islam','Web Design',26);
// $info1->info();
// $info2=new Student('Harisul Islam','App Development',29);
// $info2->info();




// destructor


class Student{
    public $name, $subject, $age;

    function __construct($n='Mariful Islam',$s='Web Development',$a=28){
        $this->name=$n;
        $this->subject=$s;
        $this->age=$a;
    }

    function __destruct(){
        echo $this->name.'</br>';
        echo $this->subject.'</br>';
        echo $this->age.'</br> </br>';
    }
}

new Student();
new Student('Ariful Islam','Web Design',26);
new Student('Harisul Islam','App Development',29);


?>
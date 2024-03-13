<?php
 declare(strict_types=1);
//  function data():int{
//    return '15';
//  };

//  function data(int|float $v1): mixed{ //mixed => any type
//    return '15';
//  };
//  var_dump(data());
// echo "data ";
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $fname=htmlspecialchars($_POST["fname"]);
//     $lname=htmlspecialchars($_POST["lname"]);
//     $inter=htmlspecialchars($_POST["favoutir"]);
//     if(empty($fname && $lname && $inter)){
//         echo "NOt submitted !!";
//     }else{
//         echo $fname;
//         echo $lname;
//         echo $inter;
//     }
   
//     // header("Location:../index.php");
// } else{
//     // header("Location:../index.php");
// }

// UnKnown number of parameter
// function sum(...$numbers):int|float {
// $add=0;
// foreach($numbers as $num){
//     $add +=$num;
// }
// return $add;
// };
// function sum(int|float ...$numbers):int|float {
//     return array_sum($numbers);
// };
// $cal="sum";
// if (is_callable($cal)) {
//     # code...
//     echo $cal(3,5,6,4,32,4,34);
// }else {
//     echo "not callable";
// }

//arrow fn
// $arr = [1,2,3,4,5];
// $arr2 = array_map(fn($num)=>$num*$num,$arr);
// print_r($arr2);
//anonymous functions 
// $v1 =function ($v){
//     echo "hrello".$v;
// };
// echo $v1(232);
// echo time();
// echo date("m/y/d h:ma");
// echo date_default_timezone_get();
// date_default_timezone_set("Asia/Karachi");
// echo date_default_timezone_get();
// echo time();
// echo date("m/y/d h:ma");
// echo date("m/d/y",time(),);
// echo date("m/d/y",strtotime("first day of february"),);
// echo $sahil;

//oop

class Transtion {
private float $amount;
public string $des;

public function __construct(float $amount,string $des){
    $this->amount = $amount;
    // $this->des=$des;
    echo $amount;
}
// public function addTex(float $rate){
//     $this->amount += $this->amount*$rate/100;
//     return $this;
// }
// public function disAdd(float $val){
// $this->amount -= $this->amount*$val/100;
// return $this;
// }
// public function getAmount() : float {
//     return $this->amount;
// }

}
// $obj= new \stdClass();
// $obj->a=1;
// $obj->b=2;
// var_dump($obj);

// $arr=[1,3,4,5];
// $obj=(object) $arr;
// var_dump($obj->{0});
<?php

// declare(strict_types=1);

namespace App\PaymentGateway\Paddle;
class Transcation
{
    // public const STATUS_P ='Paid';
    // private const STATUS_PE ='Pending';
    // public const STATUS_D ='Declined';
    // public const ALL_STATUS=[
    //     self::STATUS_P =>'Paid',
    //     self::STATUS_PE =>'Pending',
    //     self::STATUS_D =>'Declined',
    // ];

    // function __construct(){
        // var_dump(Transcation::STATUS_PE);
        // var_dump(self::STATUS_PE);
    // }
    //if(! isset(self::ALL_STATUS[$status])){}

// public float $amount=2.2;
//  public function __construct(float $amount){
//     $this->amount = $amount;
    // echo "$amount";
//  }
// public function process(){
//     var_dump("sahil calll");
// }

// public function _call(string $name,array $arguments){
//     var_dump($name,$arguments);
// }
// public function __invoke()
// {
//     var_dump("asasasas");
// }
// public function __toString():string
// {
//     return "hello";
// }
// private $name="asasas";
// private $sahil="asa";
// private $mubeen="asasas sa";

// protected string $name="CalssA";
// public function getName(){
//     return $this->name;
// }
//self
// protected static string $name="CalssA";
// public static function getName(){
//     return static::$name;
    // return self::$name;
// }
public function __construct(public float $val){
    if($val <=0){
        // throw new \Exception;
        throw new \Exception('Value should be greater then 0');
    }
var_dump($val);
}

}
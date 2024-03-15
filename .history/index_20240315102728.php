<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <form action="include/formData.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br>
  <select id="cars" name="favoutir">
  <option value="none">None</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<br>
  <button type="submit">Submit</button>
</form>  -->

  <?php
  // $sahil="sahil mubeen"; 
  require __DIR__ . './vendor/autoload.php';
  // require_once "./include/formData.php";
  // require_once "./src/app/PaymentGateway/Stripe/Transcation.php";
  // require_once "./src/app/PaymentGateway/Paddle/Transcation.php";
  // require_once "./src/app/PaymentGateway/Paddle/CustomerProfile.php";
  // require_once "./src/app/Notifaction/Email.php";
  // spl_autoload_register(function($class){
  //   var_dump($class);
  // });

  // $id = new \Ramsey\Uuid\UuidFactory();
  // echo $id->uuid4();

  // $tran = new Transtion(100,"sdsd");
  // $tran1 = (new Transtion(200,"sdsd"))->addTex(10)->disAdd(10);
  // var_dump($tran->amount);
  // var_dump($tran->getAmount());
  // $tran->addTex(10)->disAdd(10);
  // // var_dump($tran->getAmount());
  // // $tran->disAdd(10);
  // var_dump($tran->getAmount());
  // var_dump($tran1->getAmount());

  //  var_dump(ini_get("memory_limit"))
  // $name="Sahil";
  // $num=333;
  // echo $name ,$num 
  // echo $_SERVER["PHP_SELF"]

  // $a="7";
  // $b=4;
  // $c=6;
  // $d=7;
  // if($d==$c && $b == $a ||$c==$d  ){
  //     echo "This is true";
  // }
  // $res = match ($a) {
  //     4,5,6 =>  "hello" ,
  //     7 => "dsdsdksd",
  //     default=>"none"
  // };
  // echo $res;

  // ARRAY
  // $arr=["ali","ahmad","usman"];
  // $arr[]="sahil";
  // echo $arr[3];
  // print_r($arr)
  // foreach ($arr as $key => $value) {
  //  echo $value,$key;
  // }
  // unset($value);
  // echo $value
  // for ( $i=0; print $ran=5, $i<$ran ; $i++) { 
  //   echo "hello".$i;
  // }


  //buid in function 
  // echo strlen("sasasasas")
  // echo strpos("sasasasas" , "a")
  // echo strtolower($str)
  // echo strtoupper($str)
  // echo str_replace("hellor","new",$str)
  // print_r(explode(" ",$str))
  // abs(-22),sqrt(3),pow(2,2),round(3.3),rand(1,44)
  //date("Y-m-d H:i:s")
  //time("")

  //functions
  // $va1="sahil";
  // //constant
  // define("nam","sahil");
  // function firstFun (string $pr1){
  //     // global $va1;
  //     echo "first ".$GLOBALS["va1"]." function";
  //     //echo nam
  // }
  // firstFun("prar");

  // $name="sahil";
  // echo "hello {$name}"

  //Type casting 
  // $name="sahil";
  // $num="222";
  // $num=[1,2,3,4,5];
  // echo gettype($name);
  // var_dump($name);
  // var_dump((int)$num)
  // echo is_int($num);
  // echo is_bool($num);
  // echo is_string($num);
  //  echo is_array($num);
  //  echo PHP_FLOAT_MIN ."<br>";
  //  echo PHP_FLOAT_MAX;
  //  echo PHP_INT_MIN ."<br>";
  //  echo PHP_FLOAT_MAX;
  //ceil(2.3)=>3,floor>(2.5)=>(2)
  // new thing about  dynamic html 
  // $name="miii";
  // $text=<<<TEXT
  // <h1>HELLLLEJASJHDJSH $name</h1>
  // <h1>HELLLLEJASJHDJSH</h1>
  // <h1>HELLLLEJASJHDJSH</h1>
  // line 1
  // line 2
  // line 3
  // TEXT;
  // 2nd Method
  // echo <<<TEXT
  // <h1>HELLLLEJASJHDJSH $name</h1>
  // <h1>HELLLLEJASJHDJSH</h1>
  // <h1>HELLLLEJASJHDJSH</h1>
  // line 1
  // line 2
  // line 3
  // TEXT;
  // echo nl2br($text)
  // echo $text

  // $y;
  // var_dump($y);
  // $x=$y?? "hello";
  // var_dump($x);

  // @ use not display error
  // $x = @file("inedx.php");

  // $a=false;
  // function hello(){
  //   echo "helloww";
  // };
  // var_dump( $a && hello())

  // echo "Hello";
  // // include "inde.php"
  // require "inde.php";
  // echo "Hello2";

  // echo $d;
  // error_reporting(E_ALL);
  // echo $e;
  // mkdir("makeDir");
  // rmdir("makeDir");
  // mkdir("foo/bar",recursive:true);
  // rmdir("foo/bar");
  // rmdir("foo");
  // file_exists("fileName");
  // filesize("fileName");
  // file_put_contents("fileName","All Contents") =>agar file ni ho gi tu ban gy gii
  //unlink("flieName");
  //copy("flieName1","fNAme2");
  // clearstatcache();  //=>clear the cache

  // $roo=dirname(__DIR__) . DIRECTORY_SEPARATOR;
  // echo $roo;
  // echo '<pre>';
  // print_r ($_SERVER);
  // echo "</pre>";

  // Name space 
  use App\PaymentGateway\Paddle\Transcation;
  // use App\PaymentGateway\Paddle\CustomerProfile;

  // $paddleTrans = new App\PaymentGateway\Paddle\Transcation();
  // var_dump($paddleTrans);
  // var_dump(Transcation::STATUS_P);

  //get private property of class
  // $paddleTrans = new Transcation(23);
  // $reflecProp = new ReflectionProperty(Transcation::class,'amount');
  // $reflecProp->setAccessible(true);
  // var_dump($reflecProp->getValue($paddleTrans))
  // echo $paddleTrans->$amount;
  // $paddleTrans->process();
  // echo $paddleTrans;
  // $paddleTrans();
  // var_dump($paddleTrans);


  // late binding
  // $customer = new CustomerProfile();
  // echo $customer->getName();
  // $paddleTrans = new Transcation();
  // echo $paddleTrans->getName();
  //static
  // echo CustomerProfile::getName();
  // echo Transcation::getName();

  // $obj = new class(1,2,3){
  //   public function __construct(public int $b,public int $a,public int $c){

  //   }
  // };
  // var_dump($obj);
  //clone object 
  // $paddleTrans = new Transcation();
  // $paddleTrans1=$paddleTrans;
  // $padd= clone $paddleTrans;
  // var_dump($padd===$paddleTrans);

  //serilization /unserilization
  // var_dump(serialize(22));
  // var_dump(serialize("sdsds"));
  // var_dump(unserialize(serialize([22,3,"sd"])));

  // exceptions handling
  // $paddleTrans = new Transcation(-22);

  //throwable
  // set_exception_handler(function(\Throwable $e){
  //   echo $e->getMessage();
  // });
  // echo array_rand([], 1);

  // try {
  //   echo array_rand([], 1);
  // } catch (\Throwable $e) {
  //   echo $e;
  // }
  //date time
  //foist method 
  // $date = new DateTime('04/04/2020', new DateTimeZone("Europe/Amsterdam"));
  //second method
  // $date = new DateTime('04/04/2020');
  // $date = DateTime::createFromFormat('d/m/Y','04/04/2020');
  // $date->setTimezone(new DateTimeZone("Europe/Amsterdam"));
  // var_dump($date);

  // $d1 = new DateTime('05/25/2020');
  // $d2 = new DateTime('05/15/2020');
  // $Int = new DateInterval('P3M2D');
  // $res = $d1->add($Int);
  // $res = $d1->diff($d2);
  // var_dump(($res));

  // $from = new DateTime();
  // $to = (new DateTime())->add(new DateInterval('P1M'));
  // echo $from->format('m/d/Y') . $from->format('m/d/Y');
  //Period
  // $period = new DatePeriod(new DateTime('04/04/2020'), new DateInterval('P1D'), (new DateTime('04/28/2020'))->modify('+1 day'));
  // foreach ($period as $date) {
  //   echo $date->format('m/d/Y');
  // }
  class Invoice
  {
    public string $id;
    public string $number;
    public function __construct(public float $amount)
    {
      $this->amount=223232323;
      $this->id = random_int(10000, 999999);
      $this->number = random_int(1, 9);
    }
  }

  $inv = new Invoice(23);
  var_dump($inv);
  foreach ($inv as $key => $value) {
    echo $key . "=" . $value;
  }

  ?>
  <!-- short hand of echo  -->
  <!-- <?= "<p style='color:red';>Hello {$name}</p>"; ?>
 <?= PHP_VERSION ?>
 <?= __FILE__ ?> -->
  <!-- calculator
 <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post">
  <label for="fname">First no:</label><br>
  <input type="number" id="fno" name="fno" ><br>
  <select id="cars" name="op">
  <option value="add">+</option>
  <option value="sub">-</option>
  <option value="mul">*</option>
  <option value="div">/</option>
</select><br>
  <label for="lname">Sec no:</label><br>
  <input type="number" id="sno" name="sno" ><br>
  
<br>
  <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // $fnum=$_POST["fno"];
  $fnum = filter_input(INPUT_POST, "fno", FILTER_SANITIZE_NUMBER_FLOAT);
  $op = $_POST["op"];
  $sno = $_POST["sno"];

  $res = match ($op) {
    "add" => $fnum + $sno,
    "sub" => $fnum - $sno,
    "mul" => $fnum * $sno,
    "div" => $fnum / $sno,
  };

  echo $res;
}
?> -->

</body>

</html>
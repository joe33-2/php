<!--hello World!

<h1>Hellow World!</h1>

<style>
    h1{
        color: blue;
    }
</style>

<SCript>
    alert("hello world")
</SCript> -->

<?php
/*
echo "Hello World!";<h1>Hello</h1>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<h1>This is my firth PHP page</h1>-->
    <?php 
    // echo "Hello World!";
    //echo "Hello World!";

    //variable 
    // $ap = 5;
    // // $n = "john";
    // // echo $ap;
    // // echo $n;
    // var_dump($ap);
    // // var_dump($n);

    // var_dump("john");
    // var_dump(3.14);
    // var_dump(true);
    // var_dump([1,2,3]);
    // var_dump(null);

    // variable scope
    // $aa = 5;

    // // echo $aa;

    // function test(){
    //     static $aa = 6;
    //     echo $aa;
    //     echo "<br>";
    //     $aa++;
        
    // }

    // // test(); //6
    // // test(); //66
    // test();//6
    // test();//7

    // echo $aa

    // echo & print

//     echo ("hello! <br>"),"hello! <br>";
//     echo "World! <br>","World! <br>";
//    print ("hello! <br>");
//    print "hello! <br>";
//    //echo print ("");


//    //data types 

//    $a = "john";//string
//    $b = 5;//int
//    $c = 3.14;//float
//    $d = true;//bool
//    $e = [1,2,3];//array
//    $f = new stdClass();//object
//    $g = null;//null
//    $h = fopen("php_practice.php", "r");

//    var_dump($a);
//    echo "<br>";
//     var_dump($b);
//    echo "<br>";
//     var_dump($c);
//    echo "<br>";
//     var_dump($d);
//    echo "<br>";
//     var_dump($e);
//    echo "<br>";
//   var_dump($f);
//    echo "<br>";
//     var_dump($g);
//    echo "<br>";
//     var_dump($h);
   
//strings
// $a = "blue";
// $n = "<h1 style=\"color:$a\">john doe ";
$n = "john doe";

echo strlen($n),"<br>";
echo str_word_count($n),"<br>";
echo strpos($n, "doe"),"<br>";
echo strtoupper($n),"<br>";
echo strtolower($n),"<br>";
echo str_replace(" doe", "cruz", $n),"<br>";
echo strrev($n),"<br>";
echo trim($n),"<br>";
echo print_r (explode("o", $n),"<br>") ;


    ?>
</body>
</html>
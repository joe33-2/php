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
        /*echo "Hello World!";
        echo "Hello World!";

        variable 
        $ap = 5;
        $n = "john";
        echo $ap;
        echo $n;
        var_dump($ap);
        var_dump($n);

        var_dump("john");
        var_dump(3.14);
        var_dump(true);
        var_dump([1,2,3]);
        var_dump(null);

        variable scope
        $aa = 5;

        echo $aa;

        function test(){
            static $aa = 6;
            echo $aa;
            echo "<br>";
            $aa++;
            
        }

        test(); //6
        test(); //66
        test();//6
        test();//7

        echo $aa

        echo & print

        echo ("hello! <br>"),"hello! <br>";
        echo "World! <br>","World! <br>";
        print ("hello! <br>");
        print "hello! <br>";
        echo print ("");


        //data types 

        $a = "john"; //string
        $b = 5; //int
        $c = 3.14; //float
        $d = true; //bool
        $e = [1,2,3]; //array
        $f = new stdClass(); //object
        $g = null; //null
        $h = fopen("php_practice.php", "r"); // resources

        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        var_dump($g);
        echo "<br>";
        var_dump($h);
    
        //strings
        $a = "blue";
        $n = "<h1 style=\"color:$a\">john DOE ";
        $n = "john DOE";

        echo strlen($n),"<br>";
        echo str_word_count($n),"<br>";
        echo strpos($n, "DOE"),"<br>";
        echo strtoupper($n),"<br>";
        echo strtolower($n),"<br>";
        echo str_replace(" DOE", "cruz", $n),"<br>";
        echo strrev($n),"<br>";
        echo trim($n),"<br>";
        echo print_r (explode("o", $n),"<br>") ; 

        */

        /*
        $x = "Hello";
        $y = "World!";

        echo $x." ".$y . "<br>";
        echo "$x $y". "<br>";
        echo '$x $y'. "<br>";
        */
        
        // //slicing

        // $x = "Hello";
        // echo substr($x, 1, 4), "<br>";
        // echo substr($x, 1), "<br>";
        // echo substr($x, -5,2), "<br>";

        // //escape charaters
        // $x = " john \"masura\" Doe ";
        // $a = "okk\"kooo\" kk ";
        // echo $x;

        // numbers

        // $a = -1; //int
        // $b = 1.0; //float
        // $c = "5 eggs"; //string

        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_MIN, "<br>";
        // echo PHP_INT_SIZE, "<BR>";
        // echo is_int($c);

        // echo PHP_FLOAT_MAX, "<br>";
        // echo PHP_FLOAT_MIN, "<br>";
        // echo PHP_FLOAT_DIG, "<br>";
        // echo PHP_FLOAT_EPSILON, "<br>";
        // echo is_float($b), "<br>";
        // echo is_numeric($c);

        
        $a =  "john"; //string
        $b = 5; //int
        $c = 3.14; //float
        $d = true; //bool
        $e = [1,2,3]; //array
        $f = new stdClass(); //object
        $g = null; //null
        $h = fopen("php_practice.php", "r"); // resource

        // $a =  $a;
        // $b =  $b;
        // $c =  $c;
        // $d =  $d;
        // $e =  $e;
        // $f =  $f;
        // $g =  $g;
        // $h =  $h;


        // //casting - string
        // $a = (string ) $a;
        // $b = (string ) $b;
        // $c = (string ) $c;
        // $d = (string ) $d;
        // $e = $e;
        // $f = $f;
        // $g = (string ) $g;
        // $h = (string ) $h;

        // //casting - int
        // $a =(int) $a;
        // $b =(int) $b;
        // $c =(int) $c;
        // $d =(int) $d;
        // $e =(int) $e;
        // $f = $f;
        // $g =(int) $g;
        // $h =(int) $h;

        // //casting - float
        // $a =(float) $a;
        // $b =(float) $b;
        // $c =(float) $c;
        // $d =(float) $d;
        // $e =(float) $e;
        // $f = $f;
        // $g =(float) $g;
        // $h =(float) $h;

        // //casting - boolean
        // $a =(bool) $a;
        // $b =(bool) $b;
        // $c =(bool) $c;
        // $d =(bool) $d;
        // $e =(bool) $e;
        // $f =(bool)$f;
        // $g =(bool) $g;
        // $h =(bool) $h;

        // $a =(array) $a;
        // $b =(array) $b;
        // $c =(array) $c;
        // $d =(array) $d;
        // $e =(array) $e;
        // $f =(array) $f;
        // $g =(array) $g;
        // $h =(array) $h;
        
        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);

        ////php math 
        // $pi = pi();
        // echo $pi, "<br>";

        // // $minNumBER = min(800, 500, 4, 76, 1);
        // // echo $minNumber, "<br>";
        // // $mAXNumBER = max(800, 500, 4 , 76, 1);
        // // echo $mAXNumber, "<br>";

        // $num = 5;
        // echo abs($num), "<br>";

        // $sqrt = sqrt(9);
        // echo $sqrt, "<br>";

        // $rounded = round(3.49, 1);
        // echo $rounded, "<br>";

        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_MIN, "<br>";
        // echo rand(), "<br>";

        // echo rand(5, 10), "<br>";

        //PHP CONSTANT

        // define("greet8", 7);
        // var_dump( greet8);

        // function test(){
        //     echo greet8;
        // }
        // test();
        
        // //php ope
        // //arit
        
        // //add 
        // echo 9 + 8 + 65, "<br>" ;
        // //sub
        // echo 67-5-3-2,"<br>";
        // // combine sub & add
        // echo 7-8+80,"<br> ";

        // // mul

        // echo 9*8,"<br>";

        // // div

        // echo 90/5,"<br>";
        // //combine mul & div
        // echo 9*4 / 5,"<br>";
        // // combine all
        // echo 8+9/3*6,"<br>";

        // //mod
        // echo 113%5,"<br>";

        // //ex
        // echo 6** 5,"<br>";

        // // ass

        // //+=
        // //-=
        // // /=
        // // *=
        // // %=

        // // $x = 5;
        // // $x += 8;

        // // echo $x;

        // //compa

        // // ==
        // // === identical
        // // >=
        // // <=
        // // !=
        // //!==
        // var_dump (6=="6");

        // var_dump (6==="6");

        // var_dump(8!=7);

        // var_dump(8!=="7");

        // var_dump(77>=88);

        // var_dump(77<=88);
        // //<=>
        // echo 0 <=> 1,"<br>";
        // echo 1 <=> 0,"<br>";
        // echo 1 <=> 1,"<br>";

        // // ++ add increment
        // // -- sub decrement
        // // pre- incre
        // // post- incre

        // // $x = 7; // pre- incre
        // // echo ++$x,"<br>";

        // // $y = 9;   // post- incre

        // // echo $y++,"<br>";
        // // echo $y++,"<br>";

        // $x = 7; // pre- incre
        // echo --$x,"<br>";

        // $y = 9;   // post- incre

        // echo $y--,"<br>";
        // echo $y--,"<br>";

        // logical ope

        // and &
        // var_dump(true && true);//true
        // echo "<br>";
        // var_dump(true && false); //false
        // echo "<br>";
        // var_dump(7=="7" and 7>9); //false
        // echo "<br>";
        // // or ||
        // var_dump(false || false); //false
        // echo "<br>";
        // var_dump(false || true);//true
        // echo "<br>";
        // var_dump(7=="7" or 7>9); //true
        // echo "<br>";
        // //xor
        // var_dump(true xor false); //false
        // echo "<br>";
        // var_dump(true xor true);//false
        // echo "<br>";
        // var_dump(7=="7" xor 7>9); //true
        // echo "<br>";

        // //!
        // var_dump(!false); //true
        // echo "<br>";
        // var_dump(!true);//false
        // echo "<br>";
        // var_dump(!7=="7"); //false
        // echo "<br>";

        // string ope
        echo "hello ". "world!", "<br>";
        $x = "Hello";
        $x .= " World!";
        echo($x);









        




    ?>
</body>
</html>
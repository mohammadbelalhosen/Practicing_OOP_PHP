<?php

use Book\Book;

// spl_autoload_register(function($Book){
//     include"./" . $Book . '.php';

// });

include "./classone.php";

class Belal extends Book
{
}

$kj = new Belal();
echo $kj->arif;
echo "<br>";


//*methor overriding 

class Tryagain
{
    function name()
    {
        echo "my name belal";
    }
}

class Trythink extends Tryagain
{
    //*static scope for using scope resulation operator ::
    public static $name = "belal hosen";
    function name()
    {
        echo "my name sakib";
    }
    static function ok()
    {
        echo "hi my name is" . self::$name;
    }
}

$belal = new Trythink();
$belal->name();

echo "<br>";

//*using scope resulation operator
echo "<br>";
echo Trythink::$name;
echo "<br>";
Trythink::ok();

echo "<br>";


//*make trits class and this class is for stor method and property and use another class

trait helperfuction
{
    function Name()
    {
        echo "my name is belal";
    }
    function  Age()
    {
        echo "my age is 23";
    }
}

class A
{
    use helperfuction;
}

$show = new A();
$show->name();
echo "<br>";
$show->Age();
echo "<br>";
//* abstract class and abstract method this method definately use another extend classes

abstract class Like
{
    //*we just declase a methon do not anythink write or print in method
    abstract  function job();
    abstract  function eat($food);
}

class Dislike extends Like
{
    function job()
    {
        echo "company job";
    }
    function eat($food)
    {
        echo "my favourite food is $food";
    }

    function anything()
    {
        echo "anythis is print";
    }
}

$some = new Dislike();
$some->anything();
echo "<br>";
$some->eat("banana");
echo "<br>";
$some->job();

echo "<br>";

//*interface is same as abstract we can only one abstract class extends in another class but we can many interface extends in another class

interface Abc
{
    //*we just declase a methon do not anythink write or print in method

    function who();
}

interface Bcdf
{
    function like();
}

class Just implements Abc, Bcdf
{
    function who()
    {
        echo "my name is rakib";
    }
    function like()
    {
        echo "i like mango";
    }
}

$nothing = new Just();
$nothing->who();
echo "<br>";
$nothing->like();

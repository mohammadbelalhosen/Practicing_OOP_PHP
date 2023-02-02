<?php

//* make a namespace

namespace Book;

class Cars_design
{
    public $tier_color = "red";
    public $body_color = "orange", $engin = "indian";


    //* differnt class access on this method class is Book
    function cars_color($tier, Book $books)
    {
        echo "arif azad is $books->arif my name is $this->name . this car is from $this->city my car color is  $this->body_color and my tier color is $tier";
    }

    function __construct(public $city, public $name, public $email, public $style)
    {
        // echo "$name Car drive $city";

    }
}

echo "<br>";

class Book
{
    public $arif = "best author";
    // function arif(){
    //     echo "best author";
    // }
}

$boy = new Book();
$farari = new Cars_design('dhakas', 'is belal', 'mdbelal', 'dengerous'); //make another object


//* chaining operator ->
$farari->cars_color('red', $boy);

echo "<br>";
$tier = new Cars_design('belal', 'cittagong', 'omarsakib', 'normal'); //make a new object using cars_design class
$tier->cars_color('blue', $boy);
echo "<br>";
$tier->body_color = "darkish";
echo "<br>";
echo $tier->body_color;
echo "<br>";

echo $tier->engin;
echo "<br>";

echo $farari->email;


echo "<br>";

//* inheritance
class Writer extends Book
{
    public $aname = "arif azad ";
    function binde()
    {
        echo $this->aname . $this->arif;
    }
}

$arif = new Writer();
$arif->binde();

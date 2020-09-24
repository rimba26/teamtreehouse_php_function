<?php

//creatre function hello

function hello()
{
    echo "Hello, World!";
}

hello();//hello,world

$current_user="Mike";

function is_mike()
{
    global $current_user;
    if($current_user == "Mike")
{
    echo "\nYou is Mike";

}else{
    echo "Nope, You not Mike";
}
}

is_mike();// hello mike

echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "Hello, $key \n";
        }
    }else{
        echo "Hello Friend";
    }
}

helloName(["Rimba","Anank","yosep"]);

echo PHP_EOL;

function get_info($name,$title=NULL)
{
    if($title)
    {
        echo "$name was arrived, and came as $title";
    }else{
        echo "$name was arrived, welcome";
    }
}

get_info("Mike","Frog");


echo PHP_EOL;

function helloWorld($arr)
{
    return "\nHello World $arr";
}
$hello=helloWorld("You so good");

echo $hello;


echo PHP_EOL;

function addUp($a,$b)
{
    return [$a,$b,$a+$b]; //Array
}

print_r(addUp(2,4));


function sumArray($data)
{
    $result=0;
    foreach($data as $key);
    {   
        $result+=$key;
    }
    return $result;
}

echo sumArray([1,4,5,5]);

function answer()
{
    return  "You answer the question";
}
$answer=answer();

echo PHP_EOL;

$answer_cal="answer";
echo $answer_cal()."!!";


//Anonymus Function

$askName="What is your Name ?";
$nama="Buddy";

echo PHP_EOL;

$ask=function() use($askName,$nama){return "Ask the question, $askName, hello my name is $nama ";
};

echo $ask();

//built -in string function


echo PHP_EOL;
function br(){
    echo PHP_EOL;
} 

$magang="Magang TOP jos";

echo strlen($magang);

br();

echo substr($magang,7);

br();

echo substr($magang,7,3);

br();

echo strpos($magang,"jos");

br();

echo $magang[11];

br();

$team=["Mike"=>"Developer","Chris"=>"Designer","Hompton"=>"Manager"];

print_r(array_keys($team));

var_dump(array_key_exists("John",$team));

array_walk($team,function($value,$key){
    echo "$key is a $value\n";
});




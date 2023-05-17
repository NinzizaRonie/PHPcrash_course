<?php
//simple array
$numbers = [1,33,5,66];
$fruits = array('apple','orange','peach');

print_r($numbers);
var_dump($numbers);
echo $fruits[0];

//associative array
$colors =[
    1 => 'red',
    2 => 'blue',
    3 => 'purple',
];
 echo $colors[3];

 $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
 ];

 echo $hex['green'];

 $person = [
    'first_name' =>'Brad',
    'last_name' =>'Ninziza',
    'email' =>'ninzizaronie0@gmail.com'

 ];

 echo $person['first_name'];

 $people = [
    [
        'first_name' =>'Ronie',
        'last_name' =>'Ninziza',
        'email' =>'ninzizaronie0@gmail.com'
    ],
    [
        'first_name' =>'Brad',
        'last_name' =>'Traversy',
        'email' =>'brad0@gmail.com'
    ],
    [
        'first_name' =>'Joe',
        'last_name' =>'Doe',
        'email' =>'john@gmail.com'
    ]
 

 ];


 echo $people[1]['email'];
 echo $people[2]['email'];

var_dump(json_encode($people));



<h3>This is Array testing demo are here''''''''</h3>
<?php

$students=[
	'mostafizur',
	'mostafiz',
	'this'
];
print_r($students);
echo "</br>";
var_dump($students);
echo "</br>";



$array1=array(1,2,3,4,5,6,4,4,6);
print_r($array1);
echo '</br>';


$array2=array(
        'a'=>'Apple',
        'b'=>'Banana',
        'c'=>'Carrot'
);
print_r($array2);
echo '</br>';

$array3=[
        'a'=>'Apple',
        'b'=>'Banana',
        'c'=>'Carrot'
];
print_r($array3);
echo '</br>';

?>
<?php

//kind of php array 
//there are two type of php array........
#1.Single array 
#2.Nested Array

#Single Array

$array4=array("a",'b','c','d');
print_r($array4);
echo '</br>';
$array5=[
	'a'=>'mostafiz',
	'r'=>'mostafizur',
	'demo',
	'this'

];
print_r($array5);
echo '</br>';

//That's are Nested Array example..
$person=[
	['name','age','mobile','address','city'],"</br>",

	['a'=>'Apple','c'=>'cat','g'=>'god'],"</br>",
	[1,2,3,4,5,6,7,8,9]


];
print_r($person);




?>
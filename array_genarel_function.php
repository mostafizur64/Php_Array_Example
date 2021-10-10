***while loop এ list() function এবং each() function ব্যবহার করার মাধ্যমে
</br>
Note:PHP list ফাঙ্কশনের কাজ হচ্ছে array এর প্রত্যেকটি value কে variable এ assign করা।
</br>
Note:PHP each ফাঙ্কশনের কাজ হচ্ছে array এর current key এবং value রিটার্ন করা ।
</br>
<?php 

$array1=[
	'a'=>'Apple',
	'b'=>'Banana',
	'c'=>'Carrot',
	'd'=>'damil',
	'e'=>'egg',
	'f'=>'ladesfinger'
];
while (list($key,$value)= each($array1)) {
echo "$key : $value";
echo '</br>';
}
?>
<br>
Associative Array কে extract function এর মাধ্যমে:
<br>
<?php 


$person=['name'=>'mostafizur','age'=>30,'address'=>'Panchagarh','mobile'=>'0176057564'];
extract($person);
echo "Name : $name, Age :$age, Address :$address, Mobile : $mobile";
echo "<br>";




$student=["name"=>"Nahid bin Azhar","age"=>34,"address"=>"Dhaka,Bangladesh"];
extract($student);
echo "Name: $name, Age: $age, Address: $address";
?>
<br>
<br>
Numerical Array তে extract() function এর সাথে prefix ব্যবহার করার মাধ্যমে :
<?php 

$people=[
   'Mostafizur',
   '22',
   'Dhaka, Bangladesh'
];
echo '</br>';
extract($people ,EXTR_PREFIX_ALL, 'done');
echo "Name : $done_0 , Age :$done_1 , Address : $done_2";
echo "</br>";
?>
<br>
Technique-২: Associative Nested Array তে extract() function ব্যবহার করার মাধ্যমে :

Note:extract() function এর কাজ হচ্ছে associative array এর key গুলোকে variable এ রূপান্তর করে।
<br>
<?php 

$array2=
[
    ['name'=>'mostafizur','age'=>33],
    ['name'=>'mostfizur rahman', 'age'=>22],
    ['name'=>'Rahman','age'=>35]
];
foreach($array2 as $menu){
	extract($menu);
	echo "Name: $name , Age :$age";
	echo "</br>";
}
?>
<br>
Technique-৪: Numerical Nested Array te foreach function এর মধ্যে list function ব্যবহার করার মাধ্যমে।
<?php 
$array3=
[
    ['mostafizur',33],
    ['mostfizur rahman', 22],
    ['Rahman',35]
];
foreach($array3 as list( $name,$age)){
	
	echo "Name: $name , Age :$age";
	echo "</br>";
}
//তবে এই পদ্ধতি শুধু numerical Nested Array এর জন্য প্রযোজ্য হবে, Associative Nested Array এর জন্য কাজ করবেনা।
?>
//Many function are use here below this example 
<br>
<?php 
$array4=array(
	'o'=>'Orange',
	'm'=>'Mango',
	'b'=>'Banana',
	'j'=>'juckfruit',
	'c'=>'carrot'
);
reset($array4);
for ($i=0; $i <count($array4) ; $i++) {
 echo key($array4).'='.current($array4),'</br>';
	next($array4);
}

end($array4);
for ($i=count($array4); $i>0 ; $i--) { 
	echo key($array4).'='.current($array4),'</br>';
	prev($array4);
}



?>
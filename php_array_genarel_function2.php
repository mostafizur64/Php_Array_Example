PHP range() এবং array_unique function<br>
PHP তে Number অথবা letter দিয়ে নির্দিষ্ট range এর array তৈরী করার জন্য আপনাকে range() function এবং একটি array এর মধ্যে অবস্থিত value গুলোর মধ্যে unique value নিয়ে নতুন array তৈরী করার জন্য array_unique() function ব্যবহার করতে হবে। যেমন:
<br>
<?php 
$number=range(2, 10);
echo 'Assending order','<br>';
print_r($number);
echo "</br>";

$number1=range(10, 2);
echo 'Desending order','<br>';
print_r($number1);
echo "</br>";


$letter=range('A', 'Z');
echo 'Assending order','<br>';
print_r($letter);
echo "</br>";

$letter1=range('Z', 'A');
echo 'Desending order','<br>';
print_r($letter1);
echo "</br>";




 echo"</br>";
$array1=[1,2,3,4,1,2,3,4,4,1,2,3,5,8,9,6,6,9,8,5,7,8,7];
$array2=array_unique($array1);
print_r($array2);
echo "</br>";






?>
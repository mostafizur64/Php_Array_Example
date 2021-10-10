<?php 

$array1=[
    'mostafizur',
    'a'=>'Something',
    'b'=>'Anything',
    'd'=>'therefore',
    'e'=>'OutofControll'
];
print_r($array1);
echo '</br>';

foreach($array1 as $value)
{
	echo $value;
	echo "</br>";
}
foreach ($array1 as $key=>$item)
{
	echo $key;
	echo '</br>';
}
// foreach ($array1 as $man){

// 	echo($man);
// }
foreach ($array1 as $key=>$done):
	echo $key.'=>'.$done;
	echo '</br>';
endforeach;

?>
<h2>PHP Refarance some key testing demo are here</h2>
<?php 
$People=array('mostafizur','mostafiz','sobuj','atik','alamin');
print_r($People);
echo "</br>";
echo current($People).'</br>'; //the current element is mostafizur
echo next($People).'</br>';//the next element of peter is mostafiz
echo prev($People).'</br>';//the previous element of Mostafi is mostafizur
echo end($People)."</br>";//the last element is Alamin.
echo prev($People).'</br>';//the previous element of alamin is atik
echo current($People)."</br>";//Now the current element is atik.
echo reset($People);//Moves the internal pointer to  the first element of the array,which is Mostafizur.
echo next($People)."</br>";;//the next element of mostafizur is mostafiz.
print_r(each($People));//Returns the key and value of the current element('mostafiz') and moves  the internal pointern forward

?>
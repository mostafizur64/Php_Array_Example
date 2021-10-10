#PHP তে index বা key এর ভিত্তিতে array তিন প্রকার :
</br>
<!-- 
1.Numerical Array
2.Associative Array
3.Hybrid Array;
 -->
 <!-- 1 Numerical Array demo/Example
PHP তে যেইসব array এর index শুধু মাত্র number সেগুলোকে Numerical / Enumerated Array. বলে। যেমন :
  -->
<?php
$array1=array('d','t','r','t','y');
print_r($array1);
echo "</br>";



$array2=array(
5=>'mon',
6=>'pran',
7=>'jibon',
8=>'moron'
);
print_r($array2);
echo "</br>";

$array2=[
5=>'mon',
6=>'pran',
7=>'jibon',
8=>'moron'
];
print_r($array2);
echo "</br>";



?>
<!-- 2.Associative Array
PHP তে যেইসব array এর index শুধু মাত্র string সেগুলোকে Associative Array. বলে। -->
<?php
//that's one way of associative array.
$array3=[
          
          'a'=>'this is mostafizur blog',
          'b'=>'this is mostafizur ar bari',
          'c'=>'this is mostafizur ar gari'
];
print_r($array3);
echo "</br>";

echo '</br>';
//And this is other way of associative array.
$array4=array(
	// 'a'=>'Apple',
	// 'b'=>'Banana',
	// 'c'=>'cat',
	// 'd'=>'dog',
	// 'e'=>'egg'

	"mostafizur","</br>",
	'thsi ',"</br>",
	'done',"</br>",
	'lol',"</br>",
	'value',"</br>"
	);

echo count($array4);
echo "</br>";
for ($i=0;$i<count($array4);$i++) { 
	echo $array4[$i];
echo "</br>";

	// code...
}


?>




<h2>this is foreach example of associative array to catch value and key</h2>
<?php 
$array5=[
    'a'=>'Apple',
	'b'=>'Banana',
	'c'=>'cat',
	'd'=>'dog',
	'e'=>'egg'


];
foreach ($array5 as $key => $value) {
echo $key.'=>'.$value.'</br>';
echo "</br>";

}
echo "</br>";
?>
৩. Hybrid Array
PHP তে যেইসব array এর index গুলো string এবং number মিলিত অবস্থায় থাকে সেগুলোকে Hybrid Array বলে।
</br>
<?php 

$array6= //this is array short index demo
[
	'mostafizur Rahman','koko'.'</br>',
	'that.s like a good gays',
	'computer technology',
	'7th semister only for it students'
];
print_r($array6);
echo '</br>';


//this example is array function()

$array7=array(
	'aq'=>'done',
	'd'=>'foo',
	'de'=>'nice',
	'fool',
	'demo from me',
	'goys'

);
print_r($array7);
echo '</br>';
echo $array7['aq']; ///single array print that's way!
echo "</br>";

//this way to print nestesd array for example



$array8=array(
	'multi'=>array(
		'dimensional'=>array(
			'array'=>'mostafizur'

		)

	)

);
var_dump($array8['multi']['dimensional']['array']);
echo '</br>';
print_r($array8);


?>

<?php 
$array=array(
    'mostafizur',
    'Dinajpur',
    'Dhaka',
    'Bangladesh',
    'Apple'
);

print_r($array);
echo "</br>";
array_push($array, 'Banana','Caroot'); //sese akta value add korar jonne ai array_push fucnction kaj kore.
print_r($array);
echo "</br>";
//ses theke akta value ber korar jonne ai array_pop function ta beboher korte hoy

array_pop($array);
array_pop($array);
array_pop($array);
print_r ($array);
echo "</br>";
print_r($array);
echo '</br>';

array_unshift($array,'MD','Mr','Mst','He','She'); //this is Php array_unshift function demo//ata array ar first theke ak ba aktathik value add kore array te.
print_r($array);

echo "</br>";
array_shift($array); //ati kono array list theke first ar akta value ber kore dey
print_r($array);
echo "</br>";
?>
<br>
array_splice() function
Array এর মধ্যে এক বা একাধিক element add, replace এবং remove এই ধরণের কাজগুলো করার জন্য PHP তে array_splice() ফাঙ্কশনটি ব্যবহৃত হয়। চলুন কয়েকটি উদাহরণ দিয়ে বুজে নেয়া যাক :
<br>

<?php 
$input=array
(
   'red','green','orange','yellow','black'
 );
print_r($input);
$donee=array_slice($input,2);
$donee=array_slice($input, 2 ,-2);

echo "<br>";
print_r($donee);
?>
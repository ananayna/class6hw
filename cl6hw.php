<?php 
// echo "kkfjff";
// echo "djjdf";
echo "<b><u>array_rand</u></b><br>";
$test = [
    "a"=>"one",
    "b"=> "two",
    "c"=> "three",
    "d"=> "four"];

// $test1 = array_rand($test, 3);
print_r (array_rand($test, 3));
echo "<br><br>";

echo "<b><u>array_search</u></b><br>";
$test = [
    "a"=>"one",
    "b"=> "two",
    "c"=> "three",
    "d"=> "four"];

print_r (array_search("two", $test));
echo "<br><br>";

echo "<b><u>array_filter</u></b><br>";

$a1=[1,2,3,4];
print_r(array_filter($a1, function($test){
    return($test<4);
}));
echo "<br><br>";

echo "<b><u>array_slice</u></b><br>";
$test = ["one", "two", "three", "four"];

print_r (array_slice($test, 3));
echo "<br><br>";


echo "<b><u>sort</u></b><br>";
$test = ["one", "two", "three", "four"];

sort($test);

echo "<pre>";
    print_r($test);
echo "</pre>";

echo "<br><br>";

echo "<b><u>rsort</u></b><br>";
$test = ["one", "two", "three", "four"];

rsort($test);

echo "<pre>";
    print_r($test);
echo "</pre>";

echo "<br><br>";


echo "<b><u>ksort</u></b><br>";
$test = [
    "a"=>"one",
    "c"=> "two",
    "d" =>"three",
    "b"=> "four"];

ksort($test);

echo "<pre>";
    print_r($test);
echo "</pre>";

echo "<br><br>";
?>
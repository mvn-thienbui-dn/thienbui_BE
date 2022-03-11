<?php
                        //PHP Exercises - Array

            //1. $x = array(1, 2, 3, 4, 5);
$arr = array(1, 2, 3, 4, 5);
 var_dump($arr);
 unset($arr[3]);
 $arr = array_values($arr);
var_dump($arr);

            // 2. Write a PHP script to get the first element of the above array.

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);

            // 3. Write a PHP script which decodes the following JSON string and display as 
function decodes_json($value,$key)
{
    echo "$key : $value"."\n";
}
$file_js = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
$decode = json_decode($file_js,true);
array_walk_recursive($decode,"decodes_json");

            // 4. Write a PHP script to sort the following associative array : 
    // a) ascending order sort by value
$arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
asort($arr);
foreach($arr as $key=>$value)
{
echo $key. ":" .$value."\n";
}

    // b) ascending order sort by Key
$arr1=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
krsort($arr1);
foreach($arr1 as $key=>$value)
{
echo $key. ":" .$value."\n";
}

    // c) descending order sorting by Value
$arr2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($arr2);
foreach($arr2 as $key=>$value)
{
echo $key. ":" .$value."\n";
}

    // d) descending order sorting by Key
$arr3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
ksort($arr3);
foreach($arr3 as $key=>$value)
{
echo $key. ":" .$value."\n";
}

            // 5. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. 
$temperatures = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$arr = explode(',', $temperatures);
$count_item = 0;
$array_length = count($arr);
foreach($arr as $item)
{
 $count_item += $item;
}
 $medium = $count_item/$array_length;
 echo "Average Temperature is : ".$medium."\n"; 
sort($arr);
echo "List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $arr[$i];
}
echo "\n";
echo "List of five highest temperatures :";
for ($i=($array_length-5); $i< ($array_length); $i++)
{
echo $arr[$i];
}

            // 6. Write a PHP function to change the following array's all values to upper or lower case. 
function floral_print($input, $ucase)
{
$case = $ucase;
$arr = array();
if (!is_array($input))
{
return $arr;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$arr[$key] = array_change_value_case($value, $case);
 continue;
}
$arr[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $arr;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
print_r($Color);
$Color_floral_print = floral_print($Color,CASE_UPPER);
print_r($Color_floral_print);

            // 7. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 
echo implode(",",range(200,250,4));

            // 8. Write a PHP script to get the shortest/longest string length from an array.
$arr = array("abcd","abc","de","hjjj","g","wer");
$new_arr = array_map('strlen', $arr);
echo "The shortest array length is " . min($new_arr) .
". The longest array length is " . max($new_arr).'.';

            // 9. Write a PHP script to generate unique random numbers within a range.  
$arr=range(11,20);
shuffle($arr);
for ($i=0; $i< 10; $i++)
{
echo $arr[$i].' ';
}

            // 10. Write a PHP script to get the largest key in an array.
$arr =array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris");
$max_key = max( array_keys( $arr) ); 
echo $max_key;

            // 11. Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and other) using shuffle() function. 
function randPass($upper = 1, $lower = 5, $numeric = 3, $other = 2) { 
    $pass_cha = Array(); 
    $password = '';
    for ($i = 0; $i < $upper; $i++) { 
        $pass_cha[] = chr(rand(65, 90)); 
    } 
    for ($i = 0; $i < $lower; $i++) { 
        $pass_cha[] = chr(rand(97, 122)); 
    } 
    for ($i = 0; $i < $numeric; $i++) { 
        $pass_cha[] = chr(rand(48, 57)); 
    } 
    for ($i = 0; $i < $other; $i++) { 
        $pass_cha[] = chr(rand(33, 47)); 
    } 
    shuffle($pass_cha);
    foreach ($pass_cha as $value) { 
        $password .= $value; 
    } 
    return $password; 
} 
echo "result: ".randPass()."\n";

            // 12. Write a PHP program to get the index of the highest value in an associative array.  
$arr = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 5214,
    'value5' => 2145
);
reset($arr); 
arsort($arr);
$value_max = key($arr);
echo "Value max: ".$value_max;

            // 13. Write a PHP program to get the extension of a file. 
function file_extension($str){
    $str=implode("",explode("\\",$str));
    $str=explode(".",$str);
    $str=strtolower(end($str));
     return $str;
}

$file='/example/test.php';
echo file_extension($file);

            // 14. Write a PHP function to search a specified value within the values of an associative array. (use preg_match()) 
function arr_search($arr, $search)
{
reset($arr);
while (list ($key, $value) = each ($arr))
{
    if (preg_match ("/$search/i", $value)){
        echo $search." in ".$key."\n";
    }
}
}
$example = array("value1"=>"array", "value2"=>"String", "value3"=>"Loop");
arr_search($example, "Loop");

            // 15. Write a PHP script to trim all the elements in an array using array_walk function. 
$arr = array( "Red ", " Green", "Black ", " White "); 
print_r($arr);
array_walk($arr, create_function('&$value', '$value = trim($value);')); 
print_r($arr);

            // 16. Write a PHP script to lower-case and upper-case, all elements in an array.
$arr = array( "Array", "String", "Loop"); 
print_r($arr);
$lower_arr = array_map('strtolower', $arr);
print_r($lower_arr);
$upper_arr = array_map('strtoupper', $arr);
print_r($upper_arr);

            // 17. Write a PHP script to count the total number of times a specific value appears in an array. 
function count_values($arr_count, $match) 
{ 
    $count = 0; 
    
    foreach ($arr_count as $key => $value) 
    { 
        if ($value == $match) 
        { 
            $count++; 
        } 
    } 
    
    return $count; 
} 

$arr = array('1','2','3','1','7','1','3');

echo "total number ".count_values($arr, "7")."\n"; 

            // 18. Write a PHP program to remove duplicate values from an array which contains only strings or only integers. 
$colors = array( 
  0 => 'Red', 
  1 => 'Green', 
  2 => 'White', 
  3 => 'Black', 
  4 => 'Red', 
); 

$numbers = array( 
  0 => 100, 
  1 => 200, 
  2 => 100, 
  3 => -10, 
  4 => -10, 
  5 => 0, 
); 
$arr_colors = array_keys(array_flip($colors)); 
$arr_numbers = array_keys(array_flip($numbers)); 
print_r($arr_colors);
print_r($arr_numbers);

            // 19. Write a PHP script to merge two commas separated lists with unique value only.  
$list1 = "4, 5, 6, 7";
  $list2 = "4, 5, 7, 8";
  $result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
  echo $result."\n";

            // 20. Write a PHP a function to remove a specified, duplicate entry from an array.  
function arr_unique($arr, $arr_value) 
{ 
    $count = 0; 
    
    foreach($arr as $key => $value) 
    { 
        if ( ($count > 0) && ($value == $arr_value) ) 
        { 
            unset($arr[$key]); 
        } 
        
        if ($value == $arr_value) $count++; 
    } 
    
    return array_filter($arr); 
} 
$numbers = array(1, 3, 6, 3, 4, 7, 8);

print_r(arr_unique($numbers, 3));

            // 21. Write a PHP function to check whether all array values are strings or not. 
function check_arr($arr) 
{
    return array_sum(array_map('is_string', $arr)) == count($arr);
}
$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');
var_dump(check_arr($arr1));
var_dump(check_arr($arr2));

            // 22. Write a PHP script to delete a specific value from an array using array_filter() function. 
$arr = array('1' , '2', '3' , '4', '5' , '6');
$rm_value = '4';
print_r($arr);

$new_arr = array_filter($arr, function ($element) use ($rm_value) { return ($element != $rm_value);}); 
print_r($new_arr);

            // 23. Write a PHP script to remove all white spaces in an array. 
$arr = array(15, "  ", -2, "", " \n", "Red", 54, "\t");
print_r($arr);
$result = array_filter($arr, create_function('$value','return preg_match("#\S#", $value);'));                 
print_r($result);

            // 24. Write a PHP function to compare two multidimensional arrays and returns the difference. 
function arr_function($arr1,$arr2)
{
if ($arr1===$arr2)
  {
  return 0;
  }
  return ($arr1>$arr2)?1:-1;
}

$arr1=array("d"=>"red","g"=>"green","e"=>"blue");
$arr2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($arr1,$arr2,"arr_function");
print_r($result);

            // 25. Write a PHP script to combine (using one array for keys and another for its values) the following two arrays. 
$arr1 = array('x', 'y', 'z');
$arr2 = array(10, 20, 30);
$arr_intall = array_combine($arr1, $arr2);

print_r($arr_intall);

?>
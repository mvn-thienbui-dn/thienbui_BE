<?php

                // 1. Write a PHP script to :       
// a) transform a string all uppercase letters
echo strtoupper("transform a string all uppercase letters");

// b) transform a string all lowercase letters.
echo strtolower("TRANSFORM A STRING ALL UPPERCASE LETTERS");

// c) make a string's first character uppercase.
echo ucfirst("make a string's first character uppercase");

// d) make a string's first character of all the words uppercase
echo ucwords("d) make a string's first character of all the words uppercase");

                //  2. Write a PHP script to split the following string.
$str= '082307'; 
echo substr(chunk_split($str, 2, ':'), 0, -1)."\n";

                // 3. Write a PHP script to check whether a string contains a specific string? 
$str = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str,'jumps') == true) 
 {
    echo 'jumps exist';
 }
else
 {
    echo 'jumps no exist ';
 }

                // 4. Write a PHP script to convert the value of a PHP variable to string. 
$x =  20;
$str = (string)$x; 

                // 5. Write a PHP script to extract the file name from the following string. 
$link = 'www.example.com/public_html/index.php';
$file = substr(strrchr($link, "/"), 1);
echo $file;

                // 6. Write a PHP script to extract the user name from the following email ID. 
$mail = 'rayy@example.com';
$user_name = strstr($mail, '@', true);
echo $user_name;

                // 7. Write a PHP script to get the last three characters of a string. 
$mail = 'rayy@example.com';
echo substr($mail, -3);

                // 8. Write a PHP script to generate a simple random password [do not use rand() function] from a below string.
function password_generate($chars) 
{
  $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($str), 0, $chars);
}
  echo password_generate(7);

                // 9. Write a PHP script to replace the first 'the' of the following string with 'That'. 
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str);

                // 10. Write a PHP script to find the first character that is different between two strings. 
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);

                // 11. Write a PHP script to put a string in an array. 
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$array = explode("<br>", $str);
var_dump($array);

                // 13. Write a PHP script to get the filename component of the following path.
$link = 'https://www.monstarlab.com/index.php';
$file = basename($link, ".php"); 
echo $file;
                 
                // 14. Write a PHP script to print the next character of a specific character.
$character = 'a';
$next_character = ++$character; 
if (strlen($next_character) > 1) 
{
 $next_character = $next_character[0];
 }
echo $next_character;

                // 15. Write a PHP script to remove N character of a string from the beginning.
$cut_string = 'rayy@';
$str = 'rayy@example.com';
if (substr($str, 0, strlen($cut_string)) == $cut_string) 
{
 $str = substr($str, strlen($cut_string));
}
echo $str;

                // 16. Write a PHP script to insert a string at the specified position in a given string. 
$str = 'The brown fox';
$str_insert ='quick ';
$new_str = substr_replace($str, $str_insert, 4, 0);
echo $new_str;

                // 18. Write a PHP script to get the first word of a sentence.
$str = 'The quick brown fox';
$arr = explode(' ',$str);
echo $arr[0];

                // 19. Write a PHP script to remove all leading zeroes from a string.
$str = '000547023.24';
$new_str = ltrim($str, '0');
echo $new_str;

                // 20. Write a PHP script to remove part of a string.
$str = 'The quick brown fox jumps over the lazy dog';
echo str_replace(" fox ", " ", $str);

                // 21. Write a PHP script to get the characters after the last '/' in an url. 
$url = 'http://www.example.com/5478631';
echo substr($url, strrpos($url, '/' )+1);

                // 22. Write a PHP script to select first 5 words from the following string.
$str = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $str), 0, 5));

                // 23. Write a PHP script to remove comma(s) from the following numeric string. 
$str = "2,543.12";
$x = str_replace( ',', '', $str);
is_numeric($x);
  echo $x;
?>

<?php
                                //     PHP Exercise - Loop
                                    

        // 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position. 
for($i=1; $i<=10; $i++)
{
 if($i< 10)
 {
 echo "$i-";
 }
 else
  {
 echo "$i"."\n";
  }
}

        // 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
$sum=0;
        for($i=0; $i<=30; $i++)
{
        $sum+=$i;
}
echo $sum;

        // 3. Create a script to construct the following pattern, using nested for loop. 
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "* ";
     }
 echo "\n";
}

        // 4. Create a script to construct the following pattern, using a nested for loop. 
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "* ";
     }
 echo "\n";

}
for($x=5;$x>=1;$x--)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "* ";
     }
 echo "\n";
 
}

        // 5. Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24. 
$n = 4;
$x = 1;
for($i=1;$i<=4;$i++)
{
 $x*=$i; 
}
echo   $n."!"." = ".$x."\n";

        // 6. Write a program which will count the "p" characters in the text "philosophical". 
function count_cha($str_vl, $search_char)
{
    $count = 0;
    for ($i = 0; $i < strlen($str_vl); $i++)
        if ($str_vl[$i] == $search_char)
            $count++;
    return $count;
}
    $str= "philosophical";
    $search_char = 'p';
    echo count_cha($str, $search_char)."\n" ;

        // 9. Write a PHP program which iterates the integers from 1 to 50
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo "Divisible by 3 & 5 ";
     echo "is ".$i . ": FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo "Divisible by 3 ";
     echo "is ".$i. ": Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo "Divisible by 5 ";
     echo "is ".$i. ": Buzz"."\n";
   }
 }

        // 10. Write a PHP program to generate and display the first n lines of a Floyd triangle.
$k=1;
for($n=1;$n<=5;$n++)
{
   for ($i=1;$i<=$n;$i++)
    {
	 echo  $k++." ";
     }
 echo "\n";

}
?>
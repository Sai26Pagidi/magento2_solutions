<?php
$str1 = 'Tomorrow I \'ll learn PHP global variables.';
// Expected Output :
// Tomorrow I 'll learn PHP global variables.
$str1Otp = str_replace('"\"',"",$str1);
echo "By using Str replace::::".$str1Otp."<br>";
//we can use explode for the above same functionality
$str11Otp = explode('"\"',$str1);
$i=0;
print_r($str11Otp[$i]);
echo "<br>";
$i++;


$string = 'This is a bad command : del c:\\*.*';
// Expected Output :
//This is a bad command : del c:\*.* 
$string = str_replace("\\", "\\", $string);
// above code will replace all double slashes with single slash
echo "String Replace".$string."<br>";
//we can also use preg_replace for the above string
$string = preg_replace("/\\\\/", "\\", $string);
echo "Preg Replace::".$string;

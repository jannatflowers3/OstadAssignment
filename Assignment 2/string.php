
<?php 
function countVowels($str) 
{ 
    $strWithoutVowels =  
          str_ireplace(["a", "e", "i", "o", "u"], "", $str); 
    return strlen($str) - strlen($strWithoutVowels); 
} 
  

$arr = ["Hello", "World", "PHP", "Programming"];
$str= implode(" ",$arr);

$vowelsCount = countVowels($str); 
  foreach($arr as $items){
    echo  " Original Word : ".$items. "  Vowel Count: " .$vowelsCount . "  Reversed String:  " .strrev($items)." <br> " ; 
  

  }
?>
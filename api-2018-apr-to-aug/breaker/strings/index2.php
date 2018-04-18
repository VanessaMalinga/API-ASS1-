<?php
$welcome_message = "A Showed up to class,finally";
//Declare the above in two more ways

$welcome_message1 = "B showed up to class";
$welcome_message2 = <<<VTM
Arwings showed Tessa an array
VTM;
//Display every word of the string above on a new line

//split this string
$welcome_message_array = explode(' ', $welcome_message);
foreach($welcome_message_array  as $word){
  echo "{$word} <br/>";
}
/* Other things added...
echo "<br/>";

$welcome_message_array = explode(' ', $welcome_message2);
foreach($welcome_message_array  as $word){
  echo "{$word} <br/>";
}

echo "<br/>";

$welcome_message_array = explode(' ', $welcome_message1);
foreach($welcome_message_array  as $word){
  echo "{$word} <br/>";
}*/



 ?>

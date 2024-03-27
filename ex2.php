
<?php

function isPalindrome($string)
{
  return strtolower($string) === strrev($string);
}

// Coloque aqui o seu texto (Input)
$input = "arara";

$output = isPalindrome($input);
echo "Output: " . ($output ? 'True' : 'False');

?>

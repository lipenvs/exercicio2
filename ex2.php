<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXERCÍCIO 2 - DESAFIO DEV - PALÍNDROMO</title>
</head>

<body>
  <h1>
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
  </h1>
</body>

</html>
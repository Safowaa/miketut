<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   echo "Mike said...";
    echo "<h1>Mike's site</h1>";
    echo "<hr>";
    echo "<p>This is the begining</p>";

     $characterName = "Tom";
     $characterAge = 80;  
    echo "There once was a man named $characterName   <br>";
    echo "He was $characterAge years old  <br>";
    $characterName = "Mike";
    echo "he really liked the named $characterName <br>";
    echo "But didnt like being $characterAge  <br>";

    $phrase = "Giraffe Academy";
     echo strtolower($phrase);

    echo strtoupper($phrase);

      echo strlen($phrase) ;

     echo $phrase[0];

     echo "John"[0];

    $phrase[0] = "B";
    echo $phrase;

     echo str_replace("Giraffe", "Panda", $phrase);

         echo substr($phrase, 8);

         echo substr($phrase, 8, 3);

    
    ?>

</body>
</html>
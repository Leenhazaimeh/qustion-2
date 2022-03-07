<html>
  <head>
    <title>PHP Test num 1</title>
  </head>
  <body>
    <?php 

$aproducts = ["Apple", "Banana", "Cucumber", "Watermelon", "Ice-cream", "Orange" ,"Eggplant", "Egg"];
foreach ($aproducts as $frout) {
    if ($frout[0] == "A") {
        echo $frout . " ";
    }elseif ($frout[0] == "E") {
  echo $frout . " ";
}elseif ($frout[0] == "O") {
  echo $frout . " ";
} elseif ($frout[0] == "I") {
  echo $frout . " ";
} elseif ($frout[0] == "U") {
  echo $frout . " ";
}    
}

    ?> 
  </body>
</html>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

$aproducts = ["Apple", "Banana", "Cucumber", "Watermelon", "Ice-cream", "Orange" ,"Eggplant", "Egg"];
foreach ($aproducts as $model) {
    if ($model[0] == "A") {
        echo $model . " ";
    }elseif ($model[0] == "E") {
  echo $model . " ";
}elseif ($model[0] == "O") {
  echo $model . " ";
} elseif ($model[0] == "I") {
  echo $model . " ";
} elseif ($model[0] == "U") {
  echo $model . " ";
}    
}

    ?> 
  </body>
</html>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
$products_array = array("Apple", "Banana", "Cucumber", "Watermelon", "Ice-cream", "Orange" ,"Eggplant", "Egg");
    foreach($products_array as $sarray){ 

        
        {
        if(strlen($sarray)>5){
        echo $sarray.'<br>';

        }
    }
    } ?> 
  </body>
</html>

<?php
 
  for ($bar = 10, $foo = 1; $foo <= 10; $bar--, $foo++) {
    echo " $foo  $bar<br>";
  }
   
?>
<?php
 
  for ($i = 0; $i < 4; $i++) {
    echo "Внешний цикл.<br>";
    for ($j = 0; $j < 2; $j++) {
      echo "Вложенный цикл.<br>";
    }
  }
   
?>
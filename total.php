<?php
  $pasta = 'img/';
  print_r ( glob("$pasta{*.jpg,*.pdf}", GLOB_BRACE));


 $imagem = glob("$pasta{*.jpg,*.pdf}", GLOB_BRACE);
  foreach($imagem as $x){
    echo $x;
 echo "<img src='".$x."'/>";

  }

?>
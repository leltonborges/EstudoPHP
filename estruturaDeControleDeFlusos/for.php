<?php
  for($x=0; $x<1000; $x+=5){
    //para ignora determinador momento de execução usa se o "continue"
    if ($x>200 && $x<700)continue;
    //echo $x." <br/>";
  }
  echo "<select>";
  for ($i=date("Y"); $i > date("Y")-100 ; $i--) {
    echo '<option value="'.$i.'">'.$i.'</option>';
  }
  echo "</select>";
 ?>

<?php
include('index.html');
for($row=0;$row<=7;$row++){
  for($col=0;$col<=7;$col++){
    if(($row+$col)%2==0){
      echo '<div class= "box" id="w"></div>';
      
      }
      else{
        echo '<div class= "box" id="b"></div>';

      }
  }
  echo "<br>";
  
}




?>

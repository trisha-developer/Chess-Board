<?php
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
<style>
  body{
    width: 50%;
    border:4px double black;
    margin:0px auto;
    padding-left:2.6rem;
    padding-top:0.9rem;
  }
  .box{
    height:100px;
    width: 100px;
    display:inline-block;
    border:4px solid;
  }
  #w{
    background-color:white;
    
  }
  #b{
    background-color:black;

  }
</style>
<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Number: <input type="number" name="fibo">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
                  if(isset($_POST['fibo'])){
                  $a = $_POST['fibo'];
                  $x = 0;    
                  $y = 1; 
                  $w = 1;
                  
                  for($i=0;$i<=1000;$i++)    
                  {    
                      $z = $x + $y;    
                      echo $z." "; 
                      $x=$y;       
                      $y=$z;
                      $w += $z;
                      if($z==$a){
                         echo " Sum:" . $w; 
                         break;
                         
                      }else if($y>$a){
                         echo "Not in the Fibonacci Sequence";
                        break;
                      }       
                  }  
                }else{
                    echo " ";
                      }
                  }  
              ?>

</body>
</html>
<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Number: <input type="Number" name="prime">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

        <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
                  if(isset($_POST['prime'])){
                  $a = $_POST['prime'];

                  $bCheck = True; 
                  for ($i = 2; $i < $a; $i++) {
                          if ($a % $i == 0) {
                                $bCheck = False;
                                break;
                                 }               
                                }
                if ($bCheck){ echo $a . ' is a Prime'; 
                }          
                else{ echo 'NOT prime'; 
                 }       
                  }else{
                     echo " ";
                          }
                        }  
        ?>
    
    </body>
    </html>
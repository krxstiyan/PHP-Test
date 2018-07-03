<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter String: <input type="text" name="pal">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
            
                  if(isset($_POST['pal'])){
                 
                    $a = $_POST['pal'];

                    $b =  strrev($a);
                        $string_reverse = str_split($b);
                         $palin = '';
                            foreach($string_reverse as $value){
                                $palin.= $value; 
                            }

                        if($a == $palin){
                            echo "<br>Palindrome";
                        } else {
                            echo "<br>Not Palindrome"; 
                        }
                }else{
                    echo " ";
                      }
                  }  
              ?>

</body>
</html>
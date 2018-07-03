<html>
<body>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Number: <input type="number" name="fac">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

        <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if(isset($_POST['fac'])){
                     $a = $_POST['fac'];
                        $num = $a;
                        $factorial = 1;
                  for ($x=$a; $x>=1; $x--) {
                      $factorial = $factorial * $x;
                }
                 echo "Factorial of $a is $factorial";
              }else {
                  echo " ";
              }
            }
              ?>

</body>
</html>
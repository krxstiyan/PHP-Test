<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Numbers: 
                <input type="number" name="num1" style="width:50px">
                <input type="number" name="num2" style="width:50px">
                <input type="number" name="num3" style="width:50px">
                <input type="number" name="num4" style="width:50px">
                <input type="number" name="num5" style="width:50px">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
            
                  if(isset($_POST['num1'])){
                  $a1 = $_POST['num1'];
                  $a2 = $_POST['num2'];
                  $a3 = $_POST['num3'];
                  $a4 = $_POST['num4'];
                  $a5 = $_POST['num5'];
                  
                  $n[0] = $a1;
                  $n[1] = $a2;
                  $n[2] = $a3;
                  $n[3] = $a4;
                  $n[4] = $a5;

                  sort($n);

                  $arrlength = count($n);
                    for($x = 0; $x < $arrlength; $x++) {
                          echo $n[$x];
                          echo " ";
                        }
                }else{
                    echo " ";
                      }
                  }  
              ?>

</body>
</html>
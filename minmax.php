<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Numbers: 
                <input type="number" name="num1" style="width:50px">
                <input type="number" name="num2" style="width:50px">
                <input type="number" name="num3" style="width:50px">
                <input type="number" name="num4" style="width:50px">
                <input type="number" name="num5" style="width:50px">
                <input type="number" name="num6" style="width:50px">
                <input type="number" name="num7" style="width:50px">
                <input type="number" name="num8" style="width:50px">
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
                  $a6 = $_POST['num6'];
                  $a7 = $_POST['num7'];
                  $a8 = $_POST['num8'];
                  

                  echo "Smallest Number is " . (min($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8)) . "<br>"; 
                  echo "Largest Number is " . (max($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8)) . "<br>"; 
                  
                }else{
                    echo " ";
                      }
                  }  
              ?>

</body>
</html>
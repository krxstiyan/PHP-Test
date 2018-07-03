<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Number: <input type="number" name="age">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
            
                  if(isset($_POST['age'])){
                  $a = $_POST['age'];
                  if ($a < 20 ){
                      echo " Higher";
                  } else if ($a > 20){
                      echo "Lower";
                  } else {
                      echo "Correct";
                  }
                }else{
                    echo " ";
                      }
                  }  
              ?>

</body>
</html>
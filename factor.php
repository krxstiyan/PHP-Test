<html>
<body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Enter Number: <input type="number" name="fact">
                <button type="input" class="btn btn-primary" value="Submit">Submit</button>
              </form>

              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
            
                  if(isset($_POST['fact'])){
                  $a = $_POST['fact'];
                
                    echo "The factors of &nbsp;" .$a ."&nbsp;is ";
                    for ($i=1; $i<=$a; $i++){

                        if($a % $i == 0){
                            echo $i. " ";
                        }
                    }
                }else{
                    echo " ";
                      }
                  }  
              ?>

</body>
</html>
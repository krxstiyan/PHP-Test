
<!DOCTYPE html>
<html>
<body>

<textarea style="width:290px;height:150px">
<?php
$tx = file_get_contents('text.txt');
echo $tx;
?> </textarea> 

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Edit: <input type="text" name="txt">
            <button type="input" class="btn btn-primary" value="Submit">Submit</button>
    </form>

    <?php

        if(isset($_POST['txt'])){
            $text = fopen('text.txt',"a+");
            $a = $_POST['txt'];
            fwrite($text,$a); 
            fclose($text);
            echo "Saved";
        }else{
            echo " ";
        }   
    ?>


</body>
</html>

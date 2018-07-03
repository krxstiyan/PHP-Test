<html>
<body>

     <?php

        $array1 = array("1","2");
        $array2 = array("22","27");
        $array3 = array_merge($array1,$array2);

        echo "Array 1: ";
        foreach($array1 as $key => $value){
            echo " ". $value;
        }
        echo "<br> Array 2:  ";
        foreach($array2 as $key => $value){
            echo " ". $value;
        }
        echo "<br> Combined:  ";
        foreach($array3 as $key => $value){
            echo " ". $value;
        }
    ?>

</body>
</html>
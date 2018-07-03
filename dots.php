 <?php

            for($i=0;$i<=6;$i++) {
                for($j=6-$i;$j>=1;$j--) {
                echo "* ";
                }
                echo "<br>";
            }
           
            for ($i = 1; $i <= 6; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                echo "*";
                }
                for ($k = 1; $k <= 6 - $i; $k++) {
                echo "&nbsp;&nbsp;&nbsp;";
                }
                for ($j = 1; $j <= $i; $j++) {
                echo "*";
                }
                echo "</br>";
            }

            echo"</br>";

            for ($i = 1; $i <= 6; $i++) {

                for ($j = 1; $j <= 7 - $i; $j++) {
                echo "*";
                }
                for ($k = 1; $k < $i; $k++) {
                echo "&nbsp;&nbsp;&nbsp";
                }
                for ($j = 1; $j <= 7 - $i; $j++) {
                echo "*";
                }
                echo "</br>";
            }

            echo "</br>";
            for($i=0;$i<=5;$i++) {
                for($j=0;$j<=$i;$j++) {
                echo "* ";
                }
                echo "<br>";
                }
                for($i=0;$i<=5;$i++) {
                for($j=5-$i;$j>=1;$j--) {
                echo "* ";
                }
                echo "<br>";
                }

?>

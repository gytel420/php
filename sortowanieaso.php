<?php
$age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); //sort associative array in ascending order, according to the value
            //arsort() -> reverse order
            // output: key=Peter, value=35 
            // key=Ben, value=37
            // key=Joe, value=43
ksort($age); //sort associative array in ascending order, according to the key
            //krsort() -> reverse order
            //key=ben, value=37
            //key=joe, value=43
            //key=peter, value=35



?>
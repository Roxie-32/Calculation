<?php
if(isset($_POST['submit'])){
    $num = $_POST['number'];
}
/* $fact = 1;

    for($n=5; $n >= 1; $n--) {
        $fact = $fact* $n;
    }

    echo $fact;
 */
$fact = 1;

    for($n=$num; $n >= 1; $n--) {
        $fact = $fact* $n;
    }

    echo $fact;


?>
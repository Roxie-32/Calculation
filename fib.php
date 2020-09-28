<?php 
    $num1;
    $sum;
    $num2;

    function fibo($givenNumber){
        $num1=0;
        $num2=1;

    for ($i=2; $i <= $givenNumber ; $i++) { 
     $sum = $num1+$num2;
     $num1=$num2;
     $num2=$sum;

   
    }
    return $sum;

    }
    echo fibo(3);
?>
<script type="text/javascript">


    function fibo(givenNumber){
      let  num1=0;
     let   num2=1;

    for (let i=2; i <= givenNumber ; i++) { 
     sum = num1+num2;
     num1=num2;
     num2=sum;

   
    }
    return sum;

    }

    alert (fibo(3));

</script>

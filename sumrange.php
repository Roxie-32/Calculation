<?php 
      
  function sumRange($x, $y){
    $nums = [-2, 0, 3, -5, 2, -1];
    $sum = 0;

    for ($i=$x; $i<=$y; $i++){
        $sum = $sum + $nums[$i];
    
    }
    return $sum;
  }

  echo sumRange(0,2);
  echo sumRange(2,5);
  echo sumRange(0,5);

  


      
?>
<script>
   function sumRange2(x, y){
    let nums = [-2, 0, 3, -5, 2, -1];
     let sum = 0;

    for (let i=x; i<=y; i++){
        sum = sum + nums[i];
    
    }
    return sum;
  }

  console.log(sumRange2(0,2));
  console.log(sumRange2(2,5));
  console.log(sumRange2(0,5));
    function sumArray(arr)
    {
        let sum = 0;
        for (let i = 0; i < arr.length; i++) {
            sum = sum + arr[i];
         
            
        }
        return sum;
    }
 const sumRange1 =(x, y)=> {
   let nums = [-2, 0, 3, -5, 2, -1];
   let newnums = nums.splice(x, y+1);
   return sumArray(newnums);

 }
 console.log(sumRange1(2,5));
 console.log(sumRange1(0,2));
 console.log(sumRange1(0,5));
</script>
<?php
/* if(isset($_POST['submit'])){
  $text= $_POST['text'];

  function result($x){
    if ($x === null || substr($x,0, 2) == 'py') 
  {
    $ans=$x;
  }else{
    $ans= "py". $x;
  }
  echo $ans;
  }
 result($text);
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
  <input type="text" name="text" placeholder="Enter the text" id="text"> 
  <!-- <button name="submit" >Submit</button> -->
  <input type="button" value="Submit" onclick="result()">
  <h5 id="output"></h5>
</form>
<script>
    function result() {
      let text = document.getElementById("text").value;
      let output = document.getElementById('output');
  if (text === null || text === undefined || text.substring(0, 2) =='py') 
  {
    ans=text;
  }else{
    ans= `py${text}`;

  }
  output.innerHTML = ans;
}

</script>


</body>
</html>
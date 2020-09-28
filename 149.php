<?php
// if(isset($_POST['submit'])){
//     $name=$_POST['hi'];

//     function capitalize($name){
//         $hi = ucfirst($name);
//         echo $hi;
//     }

//     capitalize($name);
// }




?>

<!DOCTYPE html>   
<html>   
    <head>  
        <title></title> 
    </head>  
        
    
    <body>
        <form action="#" method="post">
        <input type="text" name="hi" id="hi" placeholder="Enter your name">
        <!-- <button  name="submit">Capitalize</button> -->
        <input type="button" value="Submit" onclick="capitalize()" >
        <h2 id="output"></h2>
        </form>
       

        <script>
            
            
           function capitalize(){
                let hi = document.getElementById("hi").value;
                let output = document.getElementById("output");
               
                output.innerHTML =hi[0].toUpperCase() + hi.slice(1);
                
            }

          // ussing charat
            function capitalize(){
                let hi = document.getElementById("hi").value;
                let output = document.getElementById("output");
               
                output.innerHTML =hi.charAt(0).toUpperCase() + hi.slice(1);
                
            }
        </script>
    </body>
</html> 

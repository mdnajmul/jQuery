<?php include "inc/head.php"; ?>
            
   <script>
       //Simple jQuery function. When click Hide button then p tag text will be hide
       
       $(document).ready(function(){
           $("button").click(function(){
               $("p").hide();
           });
       });
       
       
   </script>
   
    <p>My name is Najmul Ovi</p>
    <button>Hide</button> 

<?php include "inc/foot.php"; ?>
<?php include "inc/head.php"; ?>
 
                               
                                             
    <script>
       
       $(document).ready(function(){
           
           $('#chaining').click(function(){
               //Here, we use 3 action in one/single statement. It is called Chaining
               $('.myuniversity').css("background", "green").slideUp(3000).slideDown(3000);
           });
           
           
           
       });
       
    </script>
   
    <button id="chaining">Click Here</button>
   
    <div class="myuniversity">
       <div class="inside">
            
        </div>
    </div>

<?php include "inc/foot.php"; ?>
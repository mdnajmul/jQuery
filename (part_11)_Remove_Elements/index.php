<?php include "inc/head.php"; ?>
 
    
                                                               
                                                               
                                                                  
                                             
    <script>
       
       $(document).ready(function(){
           //Remove Full Body
           $('#remove').click(function(){
               $('.myuniversity').remove();
           });
           
           //Remove Only Element 
           $('#empty').click(function(){
               $('.myuniversity').empty();
           });
           
       });
       
    </script>
   
    <button id="remove">Remove Full Body</button>
    <button id="empty">Remove Only Element From Body</button>
   
    <div class="myuniversity">
        <div class="inside"></div>
        <p style="float:right">Md. Najmul Ovi</p>
    </div>

<?php include "inc/foot.php"; ?>
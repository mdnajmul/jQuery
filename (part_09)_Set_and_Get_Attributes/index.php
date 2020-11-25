<?php include "inc/head.php"; ?>
 
     
                                                               
                                                                  
                                             
    <script>
       
       $(document).ready(function(){
           
           //get 'href' attribute
           $('#getattr').click(function(){
               alert($('#youtube').attr('href'));
           });
           
           //set 'href', 'title' attribute
           $("#setattr").click(function(){
               $('#youtube').attr({
                   'href'  : 'https://www.facebook.com',
                   'title' : 'FaceBook'
               });
           });
           
           
           
       });
       
    </script>
   
    <button id="getattr">Get Attribute</button>
    <button id="setattr">Set Attribute</button>
   
    <div class="myuniversity">
        <p><a href="https://www.youtube.com" title="YouTube" id="youtube">YouTube</a></p>
    </div>

<?php include "inc/foot.php"; ?>
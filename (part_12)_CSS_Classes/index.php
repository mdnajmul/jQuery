<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
       $(document).ready(function(){
           
           //remove background
           $('#backg').click(function(){
               $("p").removeClass("bg bg1");
           });
           
           //remove full style
           $('#all').click(function(){
               $("p").removeClass("text bg text1 bg1");
           });
           
           //remove & add style
           $('#toggle').click(function(){
               $("p").toggleClass("text bg");
           });
           
           //add style
           $('#add').click(function(){
               $("p").addClass("text1 bg1");
           });
       });
       
    </script>
   
    <button id="backg">Remove Bacground</button>
    <button id="all">Remove All Style</button>
    <button id="toggle">Toggle Style</button>
    <button id="add">Add Style</button>
   
    <div class="myuniversity">
        <p class="text bg">Md. Najmul Ovi</p>
    </div>

<?php include "inc/foot.php"; ?>
<?php include "inc/head.php"; ?>
 
    
                                                               
                                                               
                                                                  
                                             
    <script>
       
       $(document).ready(function(){
           //Add text (End) 
           $('#append').click(function(){
               $('#myinfo').append(" and I completed BSc in CSE from Southeast University.");
           });
           
           //Add text (Start)
           $('#prepend').click(function(){
               $('#myinfo').prepend("I am ");
           });
           
           
           $('#before').click(function(){
               $('#myinfo').before("Hello! Everyone,");
           });
           
           
           $('#after').click(function(){
               $('#myinfo').after("My Skills are PHP,JAVA,JavaScript,HTML,CSS");
           });
           
           
       });
       
    </script>
   
    <button id="append">Add Last</button>
    <button id="prepend">Add First</button>
    <button id="before">Add Before</button>
    <button id="after">Add After</button>
   
    <div class="myuniversity">
        <p id="myinfo">Najmul Ovi</p>
    </div>

<?php include "inc/foot.php"; ?>
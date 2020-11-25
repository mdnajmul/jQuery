<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
           
       $(document).ready(function(){
           
           //create json object
           var personJSON = {
               "Najmul" : {
                   "skill" : "PHP,JAVA",
                   "email" : "najmul@gmail.com",
                   "versity" : "Southeast University"
               },
               "Juwel" : {
                   "skill" : "Android",
                   "email" : "juwel@gmail.com",
                   "versity" : "Northsouth University"
               }
           };
           
           //show json value
           $('#show').html(personJSON.Juwel.versity);
           
           
       });
        
     
    </script>
   
    
    
   
    <div class="myuniversity">
        <div id="show"></div>
        
    </div>

<?php include "inc/foot.php"; ?>
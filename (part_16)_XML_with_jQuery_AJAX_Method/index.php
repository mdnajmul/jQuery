<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
           
       $(document).ready(function(){
           //call Details() function
           Details();
       });
        
       function Details(){
           $.ajax({
               url:"details.xml",
               dataType:"xml",
               success: function(data){
                   //Here,rempve(Empty/Clear) all element from 'ul' tag 
                   $("ul").children().remove();
                   //hold all data from <employee></employee> tag
                   $(data).find("employee").each(function(){
                       var allData = '<li>Name: '+$(this).find("name").text()+'</li><li>Skill: '+$(this).find("skill").text()+'</li><li>University: '+$(this).find("university").text()+'</li>';
                       //append 'ul' where we show all data
                       $("ul").append(allData);
                   });
               },
               error: function(){
                   $("ul").append("Error");
               }
           });
       }    
        
     
    </script>
   
    
    
   
    <div class="myuniversity">
        <ul></ul>
    </div>

<?php include "inc/foot.php"; ?>
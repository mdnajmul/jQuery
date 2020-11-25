<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
           
       $(document).ready(function(){
           //call Details() function
           Details();
           //call autoLoad() function
           autoLoad();
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
                   $("ul").children().remove();
                   $("ul").append("<li>There is no error...</li>");
               }
           });
       }
        
        
      //This function is create for update page without refresh
      //When we write data inside xml file then these data auto updated to server without refresh page    
      function autoLoad(){
          setTimeout(function(){
             Details();
             autoLoad(); 
          }, 10);
      }    
        
     
    </script>
   
    
    
   
    <div class="myuniversity">
        <ul></ul>
    </div>

<?php include "inc/foot.php"; ?>
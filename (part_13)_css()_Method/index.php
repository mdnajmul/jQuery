<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
       //add css    
       $(document).ready(function(){
           $('#add').click(function(){
               $('p').css({
                   'background-color' : 'green',
                   'color'            : 'red',
                   'width'            : '500px',
                   'padding'          : '30px',
                   'text-align'       : 'center',
                   'font-weight'      : 'bold'
               });
           });
          
       });
       
    </script>
   
    
    <button id="add">Add CSS Style</button>
   
    <div class="myuniversity">
        <p>Md. Najmul Ovi</p>
    </div>

<?php include "inc/foot.php"; ?>
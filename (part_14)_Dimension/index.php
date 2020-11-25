<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
       //add css    
       $(document).ready(function(){
           $('#select').click(function(){
               var val = "";
               val += "Width is: "+$('.dimen').width()+"<br/>";
               val += "Height is: "+$('.dimen').height()+"<br/>";
               val += "Inner Width is: "+$('.dimen').innerWidth()+"<br/>";
               val += "Inner Height is: "+$('.dimen').innerHeight()+"<br/>";
               val += "Outer Width is: "+$('.dimen').outerWidth()+"<br/>";
               val += "Outer Height is: "+$('.dimen').outerHeight()+"<br/>";
               val += "Outer Width with Margin is: "+$('.dimen').outerWidth(true)+"<br/>";
               val += "Outer Height with Margin is: "+$('.dimen').outerHeight(true);
               
               //show value
               $('#show').html(val);
           });
          
       });
       
    </script>
   
    
    <button id="select">Display</button>
    <div id="show"></div>
   
    <div class="myuniversity">
        <p class="dimen">Md. Najmul Ovi</p>
    </div>

<?php include "inc/foot.php"; ?>
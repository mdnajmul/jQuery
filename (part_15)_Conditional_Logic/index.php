<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
           
       $(document).ready(function(){
          //validate form (Empty or Not) 
          $('#submit').click(function(e){
              var isValid = true;
              //Here, 'input[type="text"]#required' means all text field which id is 'required'
              $('input[type="text"]#required').each(function(){
                  if(($(this).val())==''){
                     isValid = false;
                     $(this).css({
                         'border' : '2px solid red'
                     });
                  } else{
                     $(this).css({
                         'border' : ''
                     });
                  }
              });
              if(isValid == false){
                 e.preventDefault();
              } else{
                  clear();
                  document.getElementById('show').innerHTML = "Thanks for submitted...";
                  return false;
              }
              
          });
           
       });
        
     //Clear input field after click submitted form
     function clear(){
         $('#myform :input').each(function(){
             $(this).val('');
         });
     }    
       
    </script>
   
    
    
   
    <div class="myuniversity">
        <form id="myform">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" id="required"></td>
                </tr>
                
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" id="required"></td>
                </tr>
                
                <tr>
                    <td>Email Address</td>
                    <td><input type="text" id="required"></td>
                </tr>
                
                <tr>
                    <td>Website</td>
                    <td><input type="text" id="required"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><button id="submit">Submit</button></td>
                </tr>
            </table>
            <div id="show"></div>
        </form>
    </div>

<?php include "inc/foot.php"; ?>
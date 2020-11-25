<?php include "inc/head.php"; ?>
 
    
                                                              
                                                               
                                                                  
                                             
    <script>
       
           
       $(document).ready(function(){
           
           $('#myform').submit(function(){
               $.post("content.php",$('#myform').serialize(), function(data){
                   $('#show').html(data);
               });
               return false;
           });
           
       });
        
     
    </script>
   
    
    
   
    <div class="myuniversity">
        <div id="show"></div>
        <form id="myform">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" required></td>
                </tr>
                
                <tr>
                    <td>Skill: </td>
                    <td><input type="text" name="skill" required></td>
                </tr>
                
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" required></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>

<?php include "inc/foot.php"; ?>
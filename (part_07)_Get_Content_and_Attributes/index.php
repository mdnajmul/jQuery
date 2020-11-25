<?php include "inc/head.php"; ?>
 
                               
                                             
    <script>
       
       $(document).ready(function(){
           
           //show only text inside html tag
           $('#show').click(function(){
               alert("The text is: "+$('#name').text());
           });
           
           //show text with html tag
           $('#html').click(function(){
               alert("The html tag is: "+$('#name').html());
           });
           
           //get value from input field
           $('#showval').click(function(){
               alert("Name from input field is: "+$('#myname').val());
           });
           
           
           
       });
       
    </script>
   
    <button id="show">Show Text</button>
    <button id="html">Show Html</button>
    <button id="showval">Show Value</button>
   
    <div class="myuniversity">
        <div>
            <input type="text" id="myname" placeholder="Your Name">
        </div>
        <P id="name">My name is <strong>Najmul Ovi</strong></P>
    </div>

<?php include "inc/foot.php"; ?>
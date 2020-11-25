<?php include "inc/head.php"; ?>
 
            
                       
                                             
    <script>
       
       $(document).ready(function(){
           //hide document
           $("#hide").click(function(){
               $(".myuniversity").hide("slow");
           });
           
           //show document
           $("#show").click(function(){
               $(".myuniversity").show("slow");
           });
           
           //hide & show options in one button
           $("#toggle").click(function(){
               $("h3").toggle("slow");
           });
           
       });
       
    </script>
   
    <button id="hide">Hide</button>
    <button id="show">Show</button>
    <button id="toggle">Toggle</button>
   
    <div class="myuniversity">
        <h3>Southeast University (Bangladesh)</h3>
        <p>
            Southeast University (Bengali: সাউথইস্ট বিশ্ববিদ্যালয়) or SEU is a private university in Banani and Tejgaon, Dhaka, Bangladesh.It is one of the reputed private university in Bangladesh. The University was established under the Private University Act, 1992 approved by the Government of the People's Republic of Bangladesh. Its permanent campus is in 251/A & 252, Tejgaon Industrial Area, Dhaka-1208, Bangladesh. SEU ranked 12th among Top Private universities in Dhaka Tribune's Private University Ranking 2019
        </p>
    </div>

<?php include "inc/foot.php"; ?>
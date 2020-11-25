<?php include "inc/head.php"; ?>
 
            
                       
                                             
    <script>
       
       $(document).ready(function(){
           //slideDown (Visible) document
           $("#slidedown").click(function(){
               $(".myuniversity").slideDown("slow");
           });
           
           //slideUp (Unvisible) document
           $("#slideup").click(function(){
               $(".myuniversity").slideUp("slow");
           });
           
           //slideToggle (Visible & Unvisible) document
           $("#slidetoggle").click(function(){
               $(".myuniversity").slideToggle("slow");
           });
           
           
       });
       
    </script>
   
    <button id="slidedown">Slide Down</button>
    <button id="slideup">Slide Up</button>
    <button id="slidetoggle">Slide Toggle</button>
   
    <div class="myuniversity">
        <h3>Southeast University (Bangladesh)</h3>
        <p>
            Southeast University (Bengali: সাউথইস্ট বিশ্ববিদ্যালয়) or SEU is a private university in Banani and Tejgaon, Dhaka, Bangladesh.It is one of the reputed private university in Bangladesh. The University was established under the Private University Act, 1992 approved by the Government of the People's Republic of Bangladesh. Its permanent campus is in 251/A & 252, Tejgaon Industrial Area, Dhaka-1208, Bangladesh. SEU ranked 12th among Top Private universities in Dhaka Tribune's Private University Ranking 2019
        </p>
    </div>

<?php include "inc/foot.php"; ?>
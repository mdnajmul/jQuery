<?php include "inc/head.php"; ?>
 
            
                       
                                             
    <script>
       
       $(document).ready(function(){
           //fadeIn (visible) document
           $("#fadein").click(function(){
               $(".myuniversity").fadeIn(1000);
           });
           
           //fadeOut (unvisible) document
           $("#fadeout").click(function(){
               $(".myuniversity").fadeOut(1000);
           });
           
           //fadeTo(speed, callback) document
           $("#fadeto").click(function(){
               $(".myuniversity").fadeTo(1000, 0.5);
           });
           
           //fadeToggle (visible & unvisible) document
           $("#fadetoggle").click(function(){
               $(".myuniversity").fadeToggle(1000);
           });
           
           
       });
       
    </script>
   
    <button id="fadein">FadeIn</button>
    <button id="fadeout">FadeOut</button>
    <button id="fadeto">FadeTo</button>
    <button id="fadetoggle">FadeToggle</button>
   
    <div class="myuniversity">
        <h3>Southeast University (Bangladesh)</h3>
        <p>
            Southeast University (Bengali: সাউথইস্ট বিশ্ববিদ্যালয়) or SEU is a private university in Banani and Tejgaon, Dhaka, Bangladesh.It is one of the reputed private university in Bangladesh. The University was established under the Private University Act, 1992 approved by the Government of the People's Republic of Bangladesh. Its permanent campus is in 251/A & 252, Tejgaon Industrial Area, Dhaka-1208, Bangladesh. SEU ranked 12th among Top Private universities in Dhaka Tribune's Private University Ranking 2019
        </p>
    </div>

<?php include "inc/foot.php"; ?>
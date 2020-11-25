<?php include "inc/head.php"; ?>
 
            
    <?php
        function callBack(){
            echo "Animation End!";
        }
    ?>                   
                                             
    <script>
       
       $(document).ready(function(){
           //start animation using animate() method
           $("#animation").click(function(){
               $(".inside").animate({
                    left: '500px',
                    opacity: '0.5',
                    height: '250px',
                    width: '250px'
               }, 5000, function(){
                   alert("<?php echo callBack(); ?>")
               });
           });
           
           //stop animation
           $("#stop").click(function(){
               $(".inside").stop();
           });
           
           
           
       });
       
    </script>
   
    <button id="animation">Start Animation</button>
    <button id="stop">Stop Animation</button>
   
    <div class="myuniversity">
       <div class="inside">
            
        </div>
    </div>

<?php include "inc/foot.php"; ?>
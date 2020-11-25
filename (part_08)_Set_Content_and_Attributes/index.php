<?php include "inc/head.php"; ?>
 
     
    <?php

        function setName(){
            echo "Md. Najmul Ovi";
        }

        function setDep(){
            echo "<strong>Department: Computer Science & Engineering</strong>";
        }

        function setSkill(){
            echo "Skill: PHP,JAVA,JavaScript,HTML,CSS";
        }
    ?>                                                            
                                                                  
                                             
    <script>
       
       $(document).ready(function(){
           
           //
           $('#name').click(function(){
               $('#getname').val("<?php echo setName(); ?>");
           });
           
           //
           $('#dep').click(function(){
               $('#line1').html("<?php echo setDep(); ?>");
           });
           
           //
           $('#skill').click(function(){
              $('#line2').text("<?php echo setSkill(); ?>"); 
           });
           
           
           
       });
       
    </script>
   
    <button id="name">Show Name</button>
    <button id="dep">Show Department</button>
    <button id="skill">Show Skill</button>
   
    <div class="myuniversity">
        <div>
            <input type="text" id="getname" placeholder="Show name will be here...">
        </div>
        <P id="line1"><strong>Department:</strong></P>
        <P id="line2">Skill:</P>
    </div>

<?php include "inc/foot.php"; ?>
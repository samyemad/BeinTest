<section class="container content_info" style="margin-top:5%;position: relative;">
          
           
            <!-- Title-->
            <div class="titles">
                <span>Means</span>
                
                
            </div>
            <!-- End Title-->

            <!-- End Title-->
            <div class="row-fluid padding_top_mini" id="product_all">
              <?php
           foreach($result as $mean)
           {
           ?>   
            <div class="titles">
                <span><?php echo $mean['name'];?></span>
                
                
            </div>   
                <?php
           }
                ?>

                  
                  <!-- Item Property-->
            </div>
            <!-- End Row-->

            

              
            
            <!-- End Title-->
           

            
            <!-- End Row-->
            <div class="row-fluid center padding_top_mini">
                <a href="#" id="load-page" style="display:none;" class="button">More Items..</a>
                
            </div>
        </section>


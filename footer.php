      <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="<?php bloginfo('template_directory');?>/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
              </p>

              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                     
               
                               <?php 
                          $i=0;
                          if ( have_posts() ) : while ( have_posts() ) : the_post();  
                          ?>        
                  <?php if( $i<3 ) : ?>
                           <li>
                            <a href="<?php the_permalink(); ?>">
                          <?php  the_post_thumbnail('footer-thumbnails');  ?> 
                          <div class="text">
                            <h4><?php the_title(); ?></h4>
                            <div class="post-meta">
                              <span class="mr-2"><?php the_date('Y-m-d'); ?> </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> <?php echo '  '.get_comments_number(); ?></span>
                            </div>
                          </div>
                        </a> 
                       </li>   
                          
                          
                       <?php   
                          
                          $i ++;
                          endif;  ?> 
                          
      <?php     endwhile; endif;  ?> 
                      
                

                      
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="<?php bloginfo('template_directory');?>/about.php">About Us</a></li>
                      <li><a href="http://localhost/isetsl/">Home</a></li>
                      <li><a  href="<?php bloginfo('template_directory');?>/contact.php">Contact</a></li>
                    
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="<?php echo get_option('twitter'); ?>"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="<?php echo get_option('facebook'); ?>"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="<?php echo get_option('instagram'); ?>"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                      <li><a href="<?php echo get_option('youtube'); ?>"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                      <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Chedli</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
          
      </footer>
      <!-- END footer -->

   

    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="<?php bloginfo('template_directory');?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery-migrate-3.0.0.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery.stellar.min.js"></script>

    
    <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>
	<?php wp_footer(); ?>
  </body>
</html>
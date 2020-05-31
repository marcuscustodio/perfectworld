<?php get_header('inter');?>


   <div class="container">
     <div class="single-posts">

          <div class="post">

          <?php if(have_posts()) : while(have_posts()) : the_post();?>

              <h3><?php the_title();?></h3>

              <?php the_post_thumbnail('post-thumbnail'); ?>

              <p class="description">
                  <?php the_content();?>
              </p>

              <div class="share">
                  <div class="content-share">
                      <p>compartilhe:</p>
                      <a href="#"><img src="<?php bloginfo('template_url');?>/img/Icon awesome-facebook-f.png" alt=""></a>
                      <a href="#"><img src="<?php bloginfo('template_url');?>/img/Icon feather-twitter.png" alt=""></a>
                  </div>
              </div>

            <?php endwhile; ?>
            <?php endif; ?>
            

          </div><!--post-->
     </div><!--single-posts-->
   </div><!--container-->

   <?php get_footer();?>
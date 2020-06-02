<?php
/*
Template Name: events
*/
?>


<?php get_header('inter');?>

    <div class="container">
        <div class="heading">
          <h3 class="text-center">últimas notícias</h3>
        </div>
      </div>


    <div class="container">
        <div class="news">

        <?php

          $sticky = get_option( 'sticky_posts' );
          rsort( $sticky );

          $args = array(
              'post__in' => $sticky,
              'posts_per_page' => 3,
              'category_name' => 'eventos-info',
              '&orderby=date&order=ASC'
              );

          $sticky_query = new WP_Query( $args );
          
          ?>
           <?php while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

            <div class="card-news">
               <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('destaque'); ?>
                <h3><?php the_title(); ?></h3>
               </a>
            </div>

          
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div><!--news-->
    </div>


  <div class="container">
    <div class="heading">
      <h3 class="text-center">Outras notícias</h3>
    </div>
  </div>

   <div class="container">
     <div class="content-posts four">

       <!-- <div class="cards-posts">
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('thumb-galerias'); ?>
              <h3><?php the_title(); ?></h3>
            </a>
       </div> -->

     

     <?php echo do_shortcode('[ajax_load_more post_type="post" destroy_after="2" posts_per_page="4" post_format="standard"  offset="3" category="eventos-info" sticky_posts="false" scroll_container="carregar" button_label="Carregar mais"]'); ?>

     </div>
   </div>



    <?php get_footer();?>
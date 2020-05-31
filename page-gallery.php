<?php

/*

Template Name: gallery

*/

?>


<?php get_header('inter');?>

  <div class="container">
    <div class="filter">
        
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="montaria-tab" data-toggle="tab" href="#montaria" role="tab" aria-controls="montaria" aria-selected="true">Montarias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos" aria-selected="false">Vídeos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="voos-tab" data-toggle="tab" href="#voos" role="tab" aria-controls="voos" aria-selected="false">Voôs</a>
            </li>
             <span class="all-videos">Todos os vídeos</span>
           
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="montaria" role="tabpanel" aria-labelledby="montaria-tab">
                <div class="container">
                    <div class="content-posts">

                    <?php
                    $my_args_serv_text = array(
                        'post_type' => 'montarias',
                        'posts_per_page' => 3,
                        'order' => 'asc'
                    );

                    $my_args_serv_text = new WP_Query ($my_args_serv_text);
                ?>

                <?php /*if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>
                    <div class="cards-posts">
                      <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('thumb-galerias', ['class' => 'img-event-info ']); ?>
                            <h3><?php the_title();?></h3>
                        </a>
                    </div>

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>*/
                ?>

                <?php echo do_shortcode('[ajax_load_more post_type="montarias" destroy_after="2" posts_per_page="4" post_format="standard"  scroll_container="carregar" button_label="Carregar mais"]'); ?>
                
                    </div>
               </div>
            </div>
            <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                <div class="container">
                    <div class="content-posts">
                    <?php
                        //args
                        $my_args_serv_text = array(
                            'post_type' => 'videos',
                            'posts_per_page' => 3,
                            'order' => 'asc'
                        );

                     

                        $my_args_serv_text = new WP_Query ($my_args_serv_text);
                    ?>

                <?php if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>
                    <div class="cards-posts">
                      <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('thumb-galerias', ['class' => 'img-event-info ']); ?>
                            <h3><?php the_title();?></h3>
                        </a>
                    </div>
            
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
                    </div>
               </div>
            </div>
            <div class="tab-pane fade" id="voos" role="tabpanel" aria-labelledby="voos-tab">
                <div class="container">
                    <div class="content-posts">
                    <?php
                        //args
                        $my_args_serv_text = array(
                            'post_type' => 'voos',
                            'posts_per_page' => 3,
                            'order' => 'asc'
                        );

                        //query

                        $my_args_serv_text = new WP_Query ($my_args_serv_text);
                    ?>


                        <?php echo do_shortcode('[ajax_load_more post_type="voos" destroy_after="2" posts_per_page="4" post_format="standard"  scroll_container="carregar" button_label="Carregar mais"]'); ?>
                    </div>
               </div>
            </div>
          </div>

    </div><!--filter-->
  </div>



   <?php get_footer();?>
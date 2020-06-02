<?php get_header ();?>

<div class="container-fluid">
        <div class="featured">
            <video autoplay muted loop id="myVideo">
                <source src="<?php bloginfo('template_url');?>/video/pw.mp4" type="video/mp4">
              </video>
            <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="" class="logo-mid">
            <h2>Aventure-se nesta versão aprimorada de um clássico MMOPRG</h2>
           <div class="cta">

           <?php
                $my_args_serv_text = array(
                    'post_type' => 'homeajustes',
                    'posts_per_page' => 1,
                );
                $my_args_serv_text = new WP_Query ($my_args_serv_text);
            ?>

            <?php if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>

            <?php 
                $linkdownload = get_field('download');
                if( $linkdownload ): ?>
                <a href="<?php echo esc_url( $linkdownload ); ?>" class="yellow-bnt">Download</a>
            <?php endif; ?>
            
            <?php 
                $linkcadastro = get_field('cadastro');
                if( $linkcadastro ): ?>

            <a href="<?php echo esc_url( $linkcadastro ); ?>" class="blue-btn">faça seu cadastro</a>
            <?php endif; ?>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

           </div>
        </div>
    </div>


    <div class="container">
        <div class="image-midle">
            <?php
                $my_args_serv_text = array(
                    'post_type' => 'homeajustes',
                    'posts_per_page' => 1,
                );
                $my_args_serv_text = new WP_Query ($my_args_serv_text);
            ?>

            <?php if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>

                <h2><?php echo the_field('titulo'); ?></h2>

            
            

            <div class="heroes-img">
                <?php if( get_field('imagem_do_meio') ): ?>
                        <img src='<?php the_field('imagem_do_meio'); ?>' />
                    <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="cold-md-6 col-lg-6 col-sm-12">
                <h3 class="tittle-e-i">Eventos e informações</h3>
                <div class="event-inf">
                   
                <?php
                    //args
                    $my_args_serv_text = array(
                        'category_name' => 'eventos-info',
                        'posts_per_page' => 3,
                        'order' => 'asc'
                    );

                    //query

                    $my_args_serv_text = new WP_Query ($my_args_serv_text);
                ?>

                <?php if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>


                    <div class="card-event">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('thumb-posts', ['class' => 'img-event-info ']); ?>
                            <p class="text"><?php the_title();?></p>
                        </a>
                    </div>

                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>

            <div class="cold-md-6 col-lg-6 col-sm-12">
                <h3 class="tittle-e-i">Notícias</h3>

                <div class="event-inf">

                <?php
                    //args
                    $my_args_serv_text = array(
                        'category_name' => 'notícias',
                        'posts_per_page' => 3,
                        'order' => 'asc'
                    );

                    //query

                    $my_args_serv_text = new WP_Query ($my_args_serv_text);
                ?>

                <?php if($my_args_serv_text->have_posts()) : while($my_args_serv_text->have_posts() ) : $my_args_serv_text->the_post();?>
                   
                    <div class="card-event">
                        <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('thumb-posts', ['class' => 'img-event-info ']); ?>
                            <p class="text"><?php the_title();?></p>
                        </a>
                    </div> 

                    <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

                </div>

                

            </div>
        </div>
    </div>

<?php get_footer()?>
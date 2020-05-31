<?php
/*
Template Name: Search Page
*/
?>
<?php get_header('inter'); ?>

<?php if (have_posts()) : ?>

  <div class="container">
    <div class="heading">
      <h3>Você pesquisou por: <span><?php echo $s ?></span></h3>
    </div>
  </div>

   <div class="container">
		<div class="content-posts">

			<?php while (have_posts()) : the_post(); ?>

			<div class="cards-posts">
				<div class="card-event">
					<a href="<?php the_permalink();?>">
						<?php the_post_thumbnail('thumb-galerias', ['class' => 'img-event-info ']); ?>
						<h3><?php the_title();?></h3>
					</a>
				</div>
						
			</div>    
			
			<?php endwhile; ?>
					<?php else : ?>

						<div class="container">
							<div class="heading">
							<h3>Nenhum termo encontrado com o termo: " <span><?php echo $s ?></span> ". Tente novamente</h3>
							</div>
							<div class="form-research">
								<?php include (TEMPLATEPATH . '/searchform.php'); ?>
							</div>
							<?php endif; ?>
						</div>

	

		
   		</div><!--content-posts-->
   </div><!--container-->


<?php get_footer();
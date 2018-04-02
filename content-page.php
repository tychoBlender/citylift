<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package allis-onepage
 */
?>
<?php 
	global $post;
?>
<article id="<?php echo $post->post_name; ?>" <?php post_class(); ?>>
	<div class="contentWrap">
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content" >
		<div class="summary">
			
			<?php 
				if($post->post_name == 'contact'){
					the_content(); 
					echo '<a href="mailto:contact@cityliftparking.com"><div id="contactBTN">Get in Touch</div></a>';
				}else{
					the_content(); 
				}
			?>		
			
		</div>
			<?php if( have_rows('solution_cards') ): ?>
				<div>
				<?php while( have_rows('solution_cards') ): the_row(); 
					  $icon = get_sub_field('icon');
					  $title = get_sub_field('title');
					  $content = get_sub_field('content');
				?>
				<div class="card">
					<?php echo $icon; ?>
					<strong class="title"><?php echo $title; ?></strong>		
					<div class="content"><?php echo $content; ?></div>
				</div>
				<?php endwhile;?>
			<?php endif; ?>
			
			<?php if( have_rows('configure_cards') ): ?>
				<div>
				<?php while( have_rows('configure_cards') ): the_row(); 
					  $icon = get_sub_field('icon');
					  $title = get_sub_field('title');
					  $content = get_sub_field('content');
					  $highlights = get_sub_field('highlights');
				?>
				<div class="card">
					<?php echo $icon; ?>
					<strong class="title"><?php echo $title; ?></strong>		
					<div class="content">
					<?php echo $content; ?>											
										
					<?php 
						$i = 1;
						while( have_rows('see_in_motion') ): the_row(); 
						$motionLink = get_sub_field('motion_content');		
						if($i == 1){
					?>					
						<p class="ANCB see-it-in-motion">
							<a href="<?php echo $motionLink; ?>" data-fancybox-group="<?php echo $title; ?>-gallery" class="fancybox">view images ›</a>
						</p>
					<?php
						}else{
						
						$video = get_sub_field('is_video');
						
						if($video == 'yes'){
					?>							
						<a style="display:none;" href="<?php echo $motionLink; ?>" data-fancybox-type="iframe" data-fancybox-group="<?php echo $title; ?>-gallery" class="fancybox">see it in motion ›</a>
						
					<?php }else{ ?>								
						<a style="display:none;" href="<?php echo $motionLink; ?>"  data-fancybox-group="<?php echo $title; ?>-gallery" class="fancybox">see it in motion ›</a>					
					<?php } ?>
					<?php } ?>
					<?php 
						$i++;
						endwhile;
					?>
					</div>	
					<hr>
					<?php echo $highlights; ?>
				</div>
				<?php endwhile;?>
			<?php endif; ?>

		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'allis-onepage' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->


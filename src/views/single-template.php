<?php 


include( __DIR__ . '/single-parts/set_post_terms.php');
$post->terms = set_post_terms_hierarchical($post);
$post->image = get_the_post_thumbnail_url($post->ID);
$post->meta  = get_post_meta($post->ID);

get_header();

while ( have_posts() ) :

	the_post();

	// -------------------------- TEMPLATE START ------------------------------
	?>


	<article class="max-w-screen-xl m-auto block pb-40 relative">

		<?php   
		// ┌─────────────────────────────────────────────────────────────────────────┐
		// │                                                                         │
		// │                                HERO                                     │
		// │                                                                         │
		// └─────────────────────────────────────────────────────────────────────────┘
		?>
		<?php include( __DIR__ . '/single-parts/hero.php');  ?>  
	

		<?php   
		// ┌─────────────────────────────────────────────────────────────────────────┐
		// │                                                                         │
		// │                              BREADCRUMBS                                │
		// │                                                                         │
		// └─────────────────────────────────────────────────────────────────────────┘
		?>
		<div class="w-full h-10 relative mb-20">
			<?php do_shortcode('[breadcrumb colour="green-500"]');  ?>
		</div>

		<div class="w-full flex mb-40">
			<?php   
			// ┌─────────────────────────────────────────────────────────────────────────┐
			// │                                                                         │
			// │                              CONTENT                                    │
			// │                                                                         │
			// └─────────────────────────────────────────────────────────────────────────┘
			?>
			<div class="w-2/3">
				<?php include( __DIR__ . '/single-parts/title.php');  ?>   
				<?php include( __DIR__ . '/single-parts/transformed_content.php');  ?>   
			</div>


			<?php
			// ┌─────────────────────────────────────────────────────────────────────────┐
			// │                                                                         │
			// │                            THE VIDEO LISTINGS                           │
			// │                                                                         │
			// └─────────────────────────────────────────────────────────────────────────┘
			?>
			<?php include( __DIR__ . '/single-parts/subcategory_video_list.php'); ?>

		</div>

		<div class="w-full flex flex-col">

			<?php
			// ┌─────────────────────────────────────────────────────────────────────────┐
			// │                                                                         │
			// │                            	RELATED SERIES                           │
			// │                                                                         │
			// └─────────────────────────────────────────────────────────────────────────┘
			?>
			<h2 class="text-2xl mb-4">Explore other series</h2>
			<div class="w-full flex gap-10 mb-10">

				<?php include( __DIR__ . '/single-parts/related_series.php'); ?>

			</div>


			<?php
			// ┌─────────────────────────────────────────────────────────────────────────┐
			// │                                                                         │
			// │ 						TUTORIALS, DEMOS AND BLOG                        │
			// │                                                                         │
			// └─────────────────────────────────────────────────────────────────────────┘
			?>
			<?php include( __DIR__ . '/generic-parts/tutorials_demos_blog.php'); ?>


		</div>


	</article>



<?php
// -------------------------- TEMPLATE END --------------------------------
endwhile;
?>

<div class="svgs">
    <?php
    include( get_stylesheet_directory() . '/src/assets/svgs/noise.svg');
    include( get_stylesheet_directory() . '/src/assets/svgs/glyph-all.svg');
    include( get_stylesheet_directory() . '/src/assets/svgs/wavey-min.php');
    ?>
</div>

<?php

get_footer();


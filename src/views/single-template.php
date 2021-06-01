<?php 


get_header();

while ( have_posts() ) :

	the_post();

	// -------------------------- TEMPLATE START ------------------------------
	?>


	<article class="">

	<?php do_shortcode('[breadcrumb colour="green-500"]'); ?>
		
	<?php include( __DIR__ . '/single-parts/title_description.php');  ?>  

		<?php include( __DIR__ . '/single-parts/youtube_lite.php');  ?>  

		<div class="flex py-3"> 

			<div class="md:w-1/5 w-24"></div>

			<div class="md:w-3/5">

				<?php include( __DIR__ . '/single-parts/breadcrumbs.php');  ?>   
				
				<?php include( __DIR__ . '/single-parts/transformed_content.php');  ?>   

				<?php include( __DIR__ . '/single-parts/youtube_link.php');  ?>  

			</div>

			<div class="md:w-1/5 w-24"></div>

		</div>

	</article>


	<?php
	// -------------------------- TEMPLATE END --------------------------------


endwhile;

get_footer();
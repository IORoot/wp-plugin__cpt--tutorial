<?php 

get_header();
$current_term = get_queried_object();
$current_term->acf = get_fields( $current_term );

/**
 * Convert all ACF meta fields to key => value pairs for the taxonomy.
 */
foreach ($current_term->acf['meta_fields'] as $meta_field)
{
    $name  = $meta_field['meta_field_name'];
    $value = $meta_field['meta_field_value'];
    $current_term->acf['meta_fields'][$name] = $value;
}

include( get_stylesheet_directory() . '/src/assets/svgs/wavey-min.php');

// -------------------------- TEMPLATE START ------------------------------
?>


    <main class="max-w-screen-xl m-auto block px-4 pb-40 relative">


        <?php include( __DIR__ . '/template-parts/taxonomy_hero.php'); ?>

        <?php do_shortcode('[breadcrumb]'); ?>

        <div class="text-3xl my-20 whitespace-pre-line">
        <?php 
            if (!empty($current_term->description)){
                echo $current_term->description;
            }
        ?>
        </div>



        <ul class="grid-ul">

            <?php while (have_posts()) {
                the_post();

                // include( __DIR__ . '/template-parts/taxonomy_item.php');
            ?>

            <?php } ?>

        </ul>

    </main>

    <div class="svgs">
        <?php
        include( get_stylesheet_directory() . '/src/assets/svgs/noise.svg');
        include( get_stylesheet_directory() . '/src/assets/svgs/glyph-all.svg');
        ?>
    </div>

<?php

// -------------------------- TEMPLATE END --------------------------------

get_footer();

/**
 * Add Isotope at bottom.
 */
$isotope_library = ANDYP_PAGEBUILDER_ISOTOPE_URL.'src/js/isotope.min.js';
?>
<script src="<?php echo $isotope_library; ?>"></script>
<script>
var elem = document.querySelector('.grid-ul');
var iso = new Isotope( elem, {
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
});
</script>

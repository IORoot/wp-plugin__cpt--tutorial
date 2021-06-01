<?php
    /**
     * 
     * $current_term is the object available.
     * 
     */
?>
<div class="w-1/3 ">


    <a href="<?php echo get_term_link($current_term); ?>" class="subcat_box flex h-60 mb-4 rounded-2xl relative overflow-hidden bg-gray-200 text-black fill-black hover:text-white hover:fill-white hover:animate-pulse">


        <?php
        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                                                                         │
        // │                                  LEFT                                   │
        // │                                                                         │
        // └─────────────────────────────────────────────────────────────────────────┘
        ?>
        <div class="subcat_sidebar transition-all w-1/3 h-full absolute top-0 left-0 flex flex-col z-30 bg-gray-100" >

            <svg class="w-1/4 h-1/2 ml-auto my-auto"><use xlink:href="#chevron-right"></use></svg>

            <?php
            // ┌─────────────────────────────────────────────────────────────────────────┐
            // │                                                                         │
            // │                                MINI GLYPH                               │
            // │                                                                         │
            // └─────────────────────────────────────────────────────────────────────────┘
            ?>
            <svg class="glyph transition-all z-50 absolute top-4 left-4 w-6 h-6">
                <use xlink:href="#<?php echo $current_term->acf['meta_fields']['SVG Glyph']; ?>"></use>
            </svg>


            <div class="subcat_text transition-all absolute bottom-0 left-0 p-2 w-full">
                <?php
                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                                TITLE                                    │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                ?>
                <h2 class="font-semibold text-2xl text-center"><?php echo ucfirst($current_term->name); ?></h2>

                <?php
                // ┌─────────────────────────────────────────────────────────────────────────┐
                // │                                                                         │
                // │                           SERIES & VIDEOS                               │
                // │                                                                         │
                // └─────────────────────────────────────────────────────────────────────────┘
                ?>
                <p class="font-light text-center"><?php echo $current_term->count; ?> videos. </p>

            </div>
        </div>





        <?php
        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                                                                         │
        // │                                  RIGHT                                  │
        // │                                                                         │
        // └─────────────────────────────────────────────────────────────────────────┘
        ?>
        <div class="w-2/3 absolute right-0 top-0">


            <?php
            // ┌─────────────────────────────────────────────────────────────────────────┐
            // │                                                                         │
            // │                                  IMAGE                                  │
            // │                                                                         │
            // └─────────────────────────────────────────────────────────────────────────┘
            ?>
            <img class="z-20 absolute top-0 right-0 h-60 object-cover" src="<?php echo $current_term->acf["featured_image"]["url"]; ?>">
            
        </div>      


        <?php
        // ┌─────────────────────────────────────────────────────────────────────────┐
        // │                                                                         │
        // │                                  NOISE                                  │
        // │                                                                         │
        // └─────────────────────────────────────────────────────────────────────────┘
        ?>
        <svg class="z-10 w-full h-full absolute left-0 top-0 "><use xlink:href="#noise"></use></svg>

    </a>
</div>
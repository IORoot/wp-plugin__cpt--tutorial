<?php
    $playlistPosition = null;
    $meta = get_post_meta($post->ID);
    if ($meta['playlistPosition'][0] != null){
        $pos = (int) $meta['playlistPosition'][0];
        $playlistPosition =  $pos + 1;
        $playlistPosition = $playlistPosition . '. ';
    }

?>

<li class="grid-item pr-2 pb-2 md:pr-4 md:pb-4 lg:pr-10 lg:pb-10 inline-block w-full md:w-1/3 lg:w-1/4 xl:w-1/5" >
                
    <a class="flex flex-col border border-fog hover:border-smoke rounded-md overflow-hidden" href="<?php echo get_permalink($post);?>">
        
        <div class="h-40  lg:h-80 bg-cover bg-center lazyload" data-bg="<?php echo get_the_post_thumbnail_url($post);?>">
            <div class="text-mist text-xs font-thin border border-mist absolute top-2 right-12 bg-night px-2 py-0.5 rounded">VIDEO</div>
        </div>
        
        <div class="flex-1 flex flex-col justify-center p-4">
            <div class="text-lg max-h-8 leading-4 mb-1 pb-1 truncate">
                <span class="text-smoke text-lg pr-1">
                    <?php
                        echo $playlistPosition;
                    ?>
                </span>
                <?php 
                    // strip off the first part of title.
                    $title = explode(' - ', $post->post_title); 
                    if (count($title) > 1){
                        $title = array_slice($title, 1);
                    } 
                    $title = implode(' ', $title);
                    echo ucwords($title);
                ?>
            </div>
            <div class="text-smoke text-xs font-thin"><?php echo the_time('F j, Y'); ?></div>
            <div class="mt-3">
            <?php 
                $terms = get_the_terms($post, 'tutorial_tags'); 
                foreach($terms as $t){
                    ?>
                    <div class="text-mist text-xs border border-fog self-start px-2 py-0.5 mr-0.5 mb-1 inline-block">
                        <?php echo strtoupper($t->name); ?>
                    </div>
                    <?php
                }
            ?>
            </div>
            
        </div>
    </a>

</li>
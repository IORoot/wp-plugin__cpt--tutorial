<div class="rounded-lg h-60 block mb-10 bg-cover" style="background-image:url('<?php echo $background_url; ?>');"  >
    <div class="w-full h-full flex flex-col bg-gradient-to-t md:bg-gradient-to-r from-black to-transparent text-white p-4 md:flex-row">

        <div class="h-full bg-cover bg-no-repeat shadow-2xl rounded-xl md:w-1/2 lg:w-1/3 xl:w-1/4" style="background-image:url('<?php echo $image_url['url']; ?>');"> </div>

        <div class="flex-1 flex-col self-left md:self-center mt-2 md:m-4 xl:m-8">
            <div class="text-xl md:text-4xl"><?php echo ucfirst($term->name); ?></div>
            <div class="py-2 hidden lg:block"><?php echo $term->description; ?></div>
            <div class="text-sm font-smoke"><?php echo count($posts); ?> videos in the <?php echo strtolower($term->name); ?> series.</div>
        </div>
        
    </div>
</div>
<article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#f59e42]">
    <a href="<?php the_permalink(); ?>" class="block">
        <?php if (has_post_thumbnail()) : ?>
        <div class="relative overflow-hidden aspect-video">
            <img src="<?php the_post_thumbnail_url('large'); ?>"
                 alt="<?php the_title(); ?>"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a5f]/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
        <?php else: ?>
        <!-- Fallback jika tidak ada featured image -->
        <div class="relative aspect-video bg-gradient-to-br from-[#4db8b8] to-[#3a9898] flex items-center justify-center">
            <i class="ti ti-photo text-white text-6xl opacity-30"></i>
        </div>
        <?php endif; ?>

        <div class="p-6">
            <!-- Post Meta -->
            <div class="flex items-center gap-3 mb-4 text-sm text-gray-500">
                <div class="flex items-center gap-1">
                    <i class="ti ti-calendar text-[#4db8b8]"></i>
                    <span><?php echo get_the_date(); ?></span>
                </div>
                <?php
                $reading_time = ceil(str_word_count(get_the_content()) / 200);
                if ($reading_time > 0) : ?>
                <div class="flex items-center gap-1">
                    <i class="ti ti-clock text-[#f59e42]"></i>
                    <span><?php echo $reading_time; ?> min read</span>
                </div>
                <?php endif; ?>
            </div>

            <!-- Title -->
            <h2 class="text-xl md:text-2xl font-extrabold text-[#1e3a5f] mb-3 leading-tight group-hover:text-[#f59e42] transition-colors">
                <?php the_title(); ?>
            </h2>

            <!-- Excerpt -->
            <p class="text-gray-600 mb-4 leading-relaxed line-clamp-3">
                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
            </p>

            <!-- Read More Link -->
            <div class="flex items-center gap-2 text-[#f59e42] font-bold group-hover:gap-3 transition-all">
                <span>Read More</span>
                <i class="ti ti-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </div>
        </div>
    </a>
</article>
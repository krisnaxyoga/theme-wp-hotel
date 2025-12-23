<?php
/**
 * Template Name: Blog
 * Author: Yoga Krisna
 * @package PenidaTripGo
 */
?>
<!-- Header WordPress -->
<?php get_template_part('template-parts/header'); ?>

<!-- Main Content with Logo Colors -->
<div class="bg-gradient-to-b from-gray-50 to-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <!-- Page Header -->
        <div class="text-center mb-12 md:mb-16">
            <div class="inline-flex items-center gap-2 bg-[#f59e42]/10 px-5 py-2 rounded-full mb-4">
                <i class="ti ti-news text-[#f59e42] text-xl"></i>
                <span class="text-sm md:text-base font-bold text-[#1e3a5f] uppercase tracking-wide">Blog</span>
            </div>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#1e3a5f] mb-4">
                <?php echo get_the_title(); ?>
            </h1>
            <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto">
                Discover travel tips, island guides, and stories from Nusa Penida
            </p>
        </div>

        <!-- Blog Grid -->
        <?php
        // Custom query untuk posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $blog_query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9, // Jumlah post per halaman
            'paged' => $paged
        ));
        ?>

        <?php if ($blog_query->have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <?php get_template_part('template-parts/loop'); ?>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2 mt-12">
            <?php
            $pagination = paginate_links(array(
                'total' => $blog_query->max_num_pages,
                'current' => $paged,
                'mid_size' => 2,
                'prev_text' => '<i class="ti ti-arrow-left"></i>',
                'next_text' => '<i class="ti ti-arrow-right"></i>',
                'type' => 'array',
            ));

            if ($pagination) {
                foreach ($pagination as $page) {
                    echo '<div class="pagination-item">' . $page . '</div>';
                }
            }
            ?>
        </div>
        <?php else : ?>
        <div class="text-center py-12 md:py-20">
            <i class="ti ti-file-search text-6xl text-gray-300 mb-4"></i>
            <p class="text-lg text-gray-500">Tidak ada artikel yang ditemukan.</p>
        </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</div>

<!-- Pagination Styles -->
<style>
.pagination-item a,
.pagination-item span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 44px;
    height: 44px;
    padding: 0 16px;
    border-radius: 12px;
    font-weight: 700;
    transition: all 0.3s ease;
}

.pagination-item a {
    background: white;
    color: #1e3a5f;
    border: 2px solid #e5e7eb;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.pagination-item a:hover {
    background: linear-gradient(to right, #f59e42, #e88d2f);
    color: white;
    border-color: #f59e42;
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(245, 158, 66, 0.3);
}

.pagination-item span.current {
    background: linear-gradient(to right, #f59e42, #e88d2f);
    color: white;
    border: 2px solid #f59e42;
    box-shadow: 0 4px 12px rgba(245, 158, 66, 0.4);
}

.pagination-item .dots {
    color: #9ca3af;
    padding: 0 8px;
}
</style>

<!-- Footer WordPress -->
<?php get_template_part('template-parts/footer'); ?>
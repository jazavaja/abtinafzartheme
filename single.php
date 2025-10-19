<?php
// Fallback if no specific template matches
custom_header(); ?>
<main class="single-post-container py-20 sm:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <article <?php post_class('post-wrapper bg-slate-900/50 backdrop-blur-lg border border-slate-800 rounded-2xl shadow-lg overflow-hidden'); ?>>

                <?php if (has_post_thumbnail()): ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover']); ?>
                    </div>
                <?php endif; ?>

                <div class="p-8 sm:p-10 lg:p-12">
                    <header class="post-header border-b border-slate-800 pb-6 mb-8">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-4"><?php the_title(); ?></h1>
                        <div class="post-meta text-slate-400 text-sm flex flex-wrap items-center gap-x-6 gap-y-2">
                            <span>
                                <strong>Published:</strong> <?php echo get_the_date(); ?>
                            </span>
                            <span>
                                <strong>Author:</strong> <?php the_author_posts_link(); ?>
                            </span>
                            <span>
                                <strong>Category:</strong> <?php the_category(', '); ?>
                            </span>
                        </div>
                    </header>

                    <div class="entry-content text-slate-300 prose-styles">
                        <?php the_content(); ?>
                    </div>
                </div>

            </article>
        <?php endwhile; else: ?>
            <p class="text-slate-400 mt-8 text-center">No post found.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>

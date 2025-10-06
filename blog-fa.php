<?php
/**
 * Template Name: Blog List Fa
 */

custom_header(); ?>

    <style>
        /* ---------------------------------- */
        /* GLOBAL STYLES & TYPOGRAPHY */
        /* ---------------------------------- */
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Tahoma', 'Vazirmatn', sans-serif;
            background-color: #020617;
            color: #ffffff;
            line-height: 1.8; /* Increased line-height for better Persian readability */
            direction: rtl;
            text-align: right;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }
        h1, h2, h3 {
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }
        h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            color: #ffffff;
            text-align: center;
        }
        h2 {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            margin-top: 2rem;
            margin-bottom: 1.5rem;
            border-right: 4px solid #4CAF50; /* RTL border */
            padding-right: 1rem;
            border-left: none;
            padding-left: 0;
        }
        h3 {
            font-size: 1.4rem;
            color: #E5E7EB;
        }
        p {
            margin-bottom: 1.5rem;
            color: #A0AEC0;
        }
        a {
            color: #66BB6A;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #81C784;
            text-decoration: underline;
        }

        /* ---------------------------------- */
        /* LAYOUT: BLOG + SIDEBAR */
        /* ---------------------------------- */
        .blog-page-wrapper {
            display: grid;
            grid-template-columns: 1fr 320px; /* Main content + Sidebar */
            gap: 3rem;
            align-items: start;
        }

        /* ---------------------------------- */
        /* BLOG POSTS GRID */
        /* ---------------------------------- */
        .blog-posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        .blog-card {
            background-color: #161B22;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(76, 175, 80, 0.1);
            text-align: right;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            border-color: #4CAF50;
        }
        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background-color: #0a0f1c;
        }
        .blog-card-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-card .category {
            color: #4CAF50;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: normal;
            margin-bottom: 0.5rem;
        }
        .blog-card h3 {
            margin: 0 0 0.75rem 0;
            font-size: 1.2rem;
        }
        .blog-card h3 a {
            color: #E5E7EB;
        }
        .blog-card h3 a:hover {
            color: #ffffff;
            text-decoration: none;
        }
        .blog-card .excerpt {
            font-size: 0.95rem;
            color: #A0AEC0;
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }
        .blog-card .meta {
            font-size: 0.85rem;
            color: #718096;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .blog-card .read-more {
            display: inline-block;
            font-weight: bold;
            color: #4CAF50;
            font-size: 0.9rem;
        }
        .blog-card .read-more:hover {
            color: #66BB6A;
            text-decoration: underline;
        }

        /* ---------------------------------- */
        /* SIDEBAR STYLES */
        /* ---------------------------------- */
        .blog-sidebar {
            position: sticky;
            top: 2rem;
        }
        .sidebar-widget {
            background-color: #161B22;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(76, 175, 80, 0.1);
        }
        .sidebar-widget h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #2D3748;
            color: #4CAF50;
        }
        .sidebar-widget p {
            font-size: 0.95rem;
            line-height: 1.7;
        }
        .sidebar-widget .cta-button {
            display: block;
            width: 100%;
            padding: 0.85rem;
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: #FFFFFF !important;
            font-weight: bold;
            border-radius: 8px;
            text-align: center;
            margin-top: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
        }
        .sidebar-widget .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.6);
            color: #FFFFFF !important;
        }
        .topics-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .topics-list li {
            padding: 0.5rem 0;
            border-bottom: 1px dashed #2D3748;
        }
        .topics-list li:last-child {
            border-bottom: none;
        }
        .topics-list a {
            color: #A0AEC0;
            text-decoration: none;
            display: flex;
            justify-content: space-between;
            transition: color 0.3s ease;
        }
        .topics-list a:hover {
            color: #4CAF50;
        }
        .topic-count {
            background-color: #2D3748;
            color: #E2E8F0;
            border-radius: 12px;
            padding: 0.1rem 0.5rem;
            font-size: 0.8rem;
        }

        /* ---------------------------------- */
        /* PAGINATION STYLES */
        /* ---------------------------------- */
        .pagination {
            margin-top: 4rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }
        .pagination .page-numbers {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #161B22;
            color: #A0AEC0;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, color 0.3s;
            border: 1px solid transparent;
        }
        .pagination .page-numbers:hover {
            background-color: #2D3748;
            color: #E5E7EB;
        }
        .pagination .page-numbers.current {
            background: linear-gradient(90deg, #4CAF50 0%, #66BB6A 100%);
            color: #FFFFFF;
            border-color: #4CAF50;
        }
        .pagination .page-numbers.dots {
            background-color: transparent;
            color: #718096;
        }
        .pagination .prev, .pagination .next {
            width: auto;
            padding: 0 1rem;
        }


        /* ---------------------------------- */
        /* RESPONSIVENESS */
        /* ---------------------------------- */
        @media(max-width: 900px) {
            .blog-page-wrapper {
                grid-template-columns: 1fr;
            }
            .blog-sidebar {
                position: relative;
                top: 0;
            }
        }
        @media(max-width: 600px) {
            .blog-posts-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <main class="blog-list-page">
        <section class="hero">
            <div class="container">
                <h1>مقالات و بینش‌ها</h1>
                <p style="text-align: center; max-width: 700px; margin: 0 auto 2rem; color: #A0AEC0;">
                    در دنیای هوش مصنوعی، علم داده، توسعه فول‌استک و استراتژی استارتاپی غوطه‌ور شوید. مقالات انتخابی ما توسط متخصصان تهیه شده تا شما را آگاه، الهام‌بخش و توانمند سازد.
                </p>
            </div>
        </section>

        <div class="container">
            <div class="blog-page-wrapper">
                <!-- Main Blog Content -->
                <div class="blog-content-area">
                    <div class="blog-posts-grid">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 20, // Show 20 posts per page
                            'paged' => $paged
                        );
                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post();
                                // Get category for the post
                                $categories = get_the_category();
                                $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'دسته‌بندی نشده';
                                $category_link = !empty($categories) ? get_category_link($categories[0]->term_id) : '#';
                                ?>
                                <article class="blog-card">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large'); ?>
                                        <?php else : ?>
                                            <!-- CHANGE: Display a default image if no featured image is set -->
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/default.png" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </a>
                                    <div class="blog-card-content">
                                        <a href="<?php echo $category_link; ?>" class="category"><?php echo $category_name; ?></a>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                        <div class="meta">
                                            <span><?php echo get_the_date('j M Y'); ?></span>
                                            <a href="<?php the_permalink(); ?>" class="read-more">ادامه مطلب ←</a>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                        else :
                            echo '<p>متاسفانه مقاله‌ای یافت نشد.</p>';
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'total' => $blog_query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => __('قبلی &raquo;'),
                            'next_text' => __('&laquo; بعدی'),
                            'type' => 'list',
                            'end_size' => 1,
                            'mid_size' => 2,
                        ));
                        ?>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    <!-- About the Blog Widget -->
                    <div class="sidebar-widget">
                        <h3>درباره این وبلاگ</h3>
                        <p>این وبلاگ فقط مجموعه‌ای از مقالات نیست؛ یک مرکز دانش برای نوآوران و سازندگان است. ما آموخته‌های خود را از خط مقدم توسعه هوش مصنوعی، مهندسی داده و رشد استارتاپ‌ها با شما به اشتراک می‌گذاریم.</p>
                        <p>منتظر مشاوره عملی، تحلیل‌های فنی عمیق و بینش‌های استراتژیک باشید که جای دیگر پیدا نخواهید کرد.</p>
                        <!--                        <a href="[Your Newsletter Link]" class="cta-button">اشتراک در خبرنامه</a>-->
                    </div>

                    <!-- CHANGE: Popular Topics Widget (Dynamic Categories) -->
                    <div class="sidebar-widget">
                        <h3>موضوعات داغ</h3>
                        <ul class="topics-list">
                            <?php
                            $args = array(
                                'orderby' => 'name',
                                'order'   => 'ASC',
                                'parent'  => 0
                            );
                            $categories = get_categories($args);
                            foreach ($categories as $category) {
                                // The $category->count property holds the number of posts in that category
                                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . ' <span class="topic-count">' . $category->count . '</span></a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
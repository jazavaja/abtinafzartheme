<?php
/**
 * Footer Template (Persian)
 */
?>
<footer class="site-footer" dir="rtl">
    <div class="container">
        <div class="footer-grid">

            <!-- ستون ۱: لوگو و توضیحات -->
            <div class="footer-col text-right">
                <div class="footer-logo" style="height: 10% !important; width: 70px !important;">
                    <?php the_custom_logo(); ?>
                </div>
                <p class="footer-desc">
                    ابتین‌افزار جوان | نوآوری در توسعه نرم‌افزار و فناوری‌های هوشمند
                </p>

                <!-- شبکه‌های اجتماعی -->
                <div class="socials justify-end">
                    <a href="#" class="social-link">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12..."/></svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825..."/></svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12..."/></svg>
                    </a>
                </div>
            </div>


            <?php
            // Fetch quick_links posts
            $args = array(
                'post_type'      => 'quick_links',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $quick_links = new WP_Query($args);
            ?>

            <!-- Column 2: Quick Links -->
            <div class="footer-col">
                <h3 class="footer-title">Quick Links</h3>
                <div class="footer-links">
                    <?php
                    if ($quick_links->have_posts()) :
                        while ($quick_links->have_posts()) : $quick_links->the_post();
                            $name_en = pods_field('quick_links', get_the_ID(), 'name_fa', true);
                            $link_en = pods_field('quick_links', get_the_ID(), 'link_fa', true);

                            // Build full link safely
                            $url = esc_url(home_url($link_en));
                            ?>
                            <a href="<?php echo $url; ?>" class="footer-link">
                                → <?php echo esc_html($name_en); ?>
                            </a>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p class="footer-empty">No links found.</p>';
                    endif;
                    ?>
                </div>
            </div>

            <!-- ستون ۳: موقعیت ما -->
            <div class="footer-col text-right">
                <h3 class="footer-title">موقعیت ما</h3>
                <div class="map-card">
                    <img
                            src="https://map.ir/static?x-api-key=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdiM2NlYzA2ZWE2NzUyYjMwMDEyYTkxMmMzMGQ5MjU1ODA5OTQyZTI5N2QyMTU0ZjAxNDM5ODA5ZTk3NWY4YzMwNmZiNjBmZDcyOWZmOGI5In0.eyJhdWQiOiIyNTQ3MSIsImp0aSI6IjdiM2NlYzA2ZWE2NzUyYjMwMDEyYTkxMmMzMGQ5MjU1ODA5OTQyZTI5N2QyMTU0ZjAxNDM5ODA5ZTk3NWY4YzMwNmZiNjBmZDcyOWZmOGI5IiwiaWF0IjoxNzAzMzQ0NjA1LCJuYmYiOjE3MDMzNDQ2MDUsImV4cCI6MTcwNTg1MDIwNSwic3ViIjoiIiwic2NvcGVzIjpbImJhc2ljIl19.kOJQzJ2Yo5M3nGHj8JP_axj0yrpqMOgnuc4AFrw53umvos1rzIJRxPnRGXKyPDO_CdxfstPFWFhN-M1AExySjwS2l9VnfiBMsnoVOMhr1IVWqfIGI35hhsa1u6xJSBwdlfbkpT5qKJMmaJ4EQjdjuWqHGG4rMzbD1H1EGv5gXyLfMW-FTVq4iBZ_nKrpEPTowCdEGd8IT70iXUK27tljbFgkR0AHhd60I76Lq5hd-TZj435gY3phJna0EU1nakIX0HWtc6hCamyyg_-FogrZEVg276cjlAlxTt17KUzwJutjbaH5Htf6iQKDZEUaz3BQLFa3kfCVFhOTrBLTATpWzQ&width=700&height=500&markers=color:red|label:a|51.394912,35.72164&zoom_level=17"
                            alt="Rankola Location Map"
                            class="map-image"
                            loading="lazy"
                    />
                </div>
                <p class="footer-location">
                    <svg class="icon-geo ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    اصفهان، ایران
                </p>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">
                © <?php echo esc_html(date('Y')); ?> ابتین‌افزارجوان. کلیه حقوق محفوظ است.
            </p>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>

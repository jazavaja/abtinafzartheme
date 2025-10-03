<footer class="border-t border-white/10 bg-slate-900/50">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

            <!-- Column 1: Logo & Description -->
            <div class="space-y-6">
                <div class="h-12 w-auto" style="height: 10% !important; width: 70px !important;">
                    <?php the_custom_logo(); ?>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed" style="padding-top: 20px">
                    Rankola - Your trusted partner for innovative solutions and exceptional service.
                </p>
                <!-- Social Media Links (Optional) -->
                <div class="flex gap-4">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121L7.773 13.87l-2.897-.906c-.63-.196-.64-.63.135-.93l11.316-4.36c.527-.196.985.126.816.926z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="space-y-6">
                <h3 class="text-white font-semibold text-lg">Quick Links</h3>
                <div class="flex flex-col gap-3">
                    <?php
                    $footer_links = get_theme_mod('rankola_footer_links');
                    $footer_links = json_decode($footer_links, true);

                    if (!empty($footer_links)) :
                        foreach ($footer_links as $link) : ?>
                            <a href="<?php echo esc_url($link['url']); ?>"
                               class="text-sm text-slate-400 hover:text-white transition-colors hover:translate-x-1 inline-block">
                                → <?php echo esc_html($link['label']); ?>
                            </a>
                        <?php endforeach;
                    endif;
                    ?>
                </div>
            </div>

            <!-- Column 3: Location Map -->
            <div class="space-y-6">
                <h3 class="text-white font-semibold text-lg">Our Location</h3>
                <div class="rounded-lg overflow-hidden shadow-lg border border-white/10">
                    <img
                            src="https://map.ir/static?x-api-key=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdiM2NlYzA2ZWE2NzUyYjMwMDEyYTkxMmMzMGQ5MjU1ODA5OTQyZTI5N2QyMTU0ZjAxNDM5ODA5ZTk3NWY4YzMwNmZiNjBmZDcyOWZmOGI5In0.eyJhdWQiOiIyNTQ3MSIsImp0aSI6IjdiM2NlYzA2ZWE2NzUyYjMwMDEyYTkxMmMzMGQ5MjU1ODA5OTQyZTI5N2QyMTU0ZjAxNDM5ODA5ZTk3NWY4YzMwNmZiNjBmZDcyOWZmOGI5IiwiaWF0IjoxNzAzMzQ0NjA1LCJuYmYiOjE3MDMzNDQ2MDUsImV4cCI6MTcwNTg1MDIwNSwic3ViIjoiIiwic2NvcGVzIjpbImJhc2ljIl19.kOJQzJ2Yo5M3nGHj8JP_axj0yrpqMOgnuc4AFrw53umvos1rzIJRxPnRGXKyPDO_CdxfstPFWFhN-M1AExySjwS2l9VnfiBMsnoVOMhr1IVWqfIGI35hhsa1u6xJSBwdlfbkpT5qKJMmaJ4EQjdjuWqHGG4rMzbD1H1EGv5gXyLfMW-FTVq4iBZ_nKrpEPTowCdEGd8IT70iXUK27tljbFgkR0AHhd60I76Lq5hd-TZj435gY3phJna0EU1nakIX0HWtc6hCamyyg_-FogrZEVg276cjlAlxTt17KUzwJutjbaH5Htf6iQKDZEUaz3BQLFa3kfCVFhOTrBLTATpWzQ&width=700&height=500&markers=color:red|label:a|51.394912,35.72164&zoom_level=17"
                            alt="Rankola Location Map"
                            class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                    />
                </div>
                <p class="text-sm text-slate-400">
                    <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Esfahan, Iran
                </p>
            </div>
        </div>

        <!-- Bottom Bar: Copyright -->
        <div class="pt-8 border-t border-white/10">
            <p class="text-center text-sm text-slate-400">
                © <?php echo esc_html(date('Y')); ?> AbtinAfzarJavan. All rights reserved.
            </p>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>
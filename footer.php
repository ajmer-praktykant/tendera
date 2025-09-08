<?php if ( get_the_ID() != 14 ) : ?>
<?php get_template_part( 'template-parts/universal', 'content' ); ?>
<?php endif; ?> 
<section class="section hot-menu">
    <div class="container">
        <div class="hot-menu__columns">
            <div class="hot-menu__column">
                <a href="<?php echo get_home_url(); ?>" class="hot-menu__logo">
                    <?php
                    $image = get_field('logo', 'option');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                    <?php endif; ?>
                </a>
            </div>
            <div class="hot-menu__column">
                <div class="hot-menu__row">
                    <header class="hot-menu__header">
                        <h3 class="hot-menu__title">
                            Menu
                        </h3>
                    </header>
                </div>
                <div class="hot-menu__row">
                    <nav class="hot-menu__nav">
                        <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
                    </nav>
                </div>
            </div>
            <div class="hot-menu__column">
                <div class="hot-menu__row">
                    <header class="hot-menu__header">
                        <h3 class="hot-menu__title">
                            Lokalnie
                        </h3>
                    </header>
                </div>
                <div class="hot-menu__row">
                    <nav class="hot-menu__nav">
                        <?php wp_nav_menu(array('theme_location' => 'city_menu')); ?>
                    </nav>
                </div>
            </div>
            <?php if (have_rows('footer_details', 'option')): ?>
                <div class="hot-menu__column">
                    <div class="hot-menu__row">
                        <header class="hot-menu__header">
                            <h3 class="hot-menu__title">
                                Dane kontaktowe
                            </h3>
                        </header>
                    </div>
                    <div class="hot-menu__row">
                        <div class="hot-menu__details">
                            <?php while (have_rows('footer_details', 'option')): the_row(); ?>
                                <div class="hot-menu__detail">
                                    <?php
                                    $image = get_sub_field('footer_detail_icon');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                                    <?php endif; ?>
                                    <div class="hot-menu__desc">
                                        <?php the_sub_field('footer_detail_desc'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="hot-menu__row">
                        <div class="hot-menu__desc">
                            <header class="hot-menu__header">
                                <h3 class="hot-menu__title">
                                    Informacja:
                                </h3>
                            </header>
                        </div>
                    </div>
                    <div class="hot-menu__row">
                        <div class="hot-menu__desc">
                            Kancelaria przyjmuje klientów wyłącznie na umówionych wcześniej telefonicznie spotkaniach.
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (have_rows('social_media', 'option')): ?>
                <div class="hot-menu__column">
                    <div class="hot-menu__row">
                        <header class="hot-menu__header">
                            <h3 class="hot-menu__title">
                                Sledź nas
                            </h3>
                        </header>
                    </div>
                    <div class="hot-menu__row">
                        <div class="hot-menu__socials">
                            <?php while (have_rows('social_media', 'option')): the_row(); ?>
                                <div class="hot-menu__social">
                                    <a id="<?php the_sub_field('social_media_footer_id'); ?>" href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
                                        <?php
                                        $image = get_sub_field('social_media_icon');
                                        if (!empty($image)): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php if (get_sub_field('header_lang')) { ?>
    <footer class="footer">
        <div class="container">
            <div class="footer__columns">
                <div class="footer__column">
                    <div class="footer__items">
                        <div class="footer__item">
                            <div class="footer__copyright">
                                <?php the_field('copyright_lang', pll_current_language('slug')); ?>
                            </div>
                        </div>
                        <div class="footer__item">
                            <div class="footer__privacy-policy">
                                <?php the_field('privacy_policy_lang', pll_current_language('slug')); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__column">
                    <div class="footer__webdesign">
                        <?php the_field('webdesign_realization_lang', pll_current_language('slug')); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } else { ?>
    <footer class="footer">
        <div class="container">
            <div class="footer__columns">
                <div class="footer__column">
                    <div class="footer__items">
                        <div class="footer__item">
                            <div class="footer__copyright">
                                <?php the_field('copyright', 'option'); ?>
                            </div>
                        </div>
                        <div class="footer__item">
                            <div class="footer__privacy-policy">
                                <?php the_field('privacy_policy', 'option'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__column">
                    <div class="footer__webdesign">
                        <?php the_field('webdesign_realization', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>
<?php if (have_rows('mobile_icons', 'option')): ?>
    <div class="bottom-bar">
        <ul>
            <?php while (have_rows('mobile_icons', 'option')): the_row(); ?>
                <?php 
                $url = get_sub_field('mobile_link', 'option');
				//$url = $link['url'];
                if(!empty($url)) :
                ?>
                <li>
                    <a href="<?=$url['url']?>" target="<?=$url['target']?>">
                        <?php
                            $image = get_sub_field('mobile_ico');
                            if (!empty($image)): 
                        ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert" width="24" height="24"/>
                        <?php endif; ?>
                    </a>
                </li>
                <?php endif; ?>
            <?php endwhile; ?>                                    
        </ul>
    </div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
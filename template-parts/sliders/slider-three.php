<section <?php if(get_sub_field('hero_style_three_slider_section_id')) { ?>id="<?php the_sub_field('hero_style_three_slider_section_id'); ?>"<?php } ?> class="section-hero-three">
    <?php if( have_rows('hero_style_three_slider') ): ?>
        <div class="section-hero-three__slider">
            <?php while( have_rows('hero_style_three_slider') ): the_row(); ?>
                <div class="section-hero-three__item">
                    <figure class="section-hero-three__img">
                        <?php
                        $image = get_sub_field('hero_style_three_slider_img');
                        if( !empty( $image ) ): ?>
                            <img class="animated" data-animation-in="zoomInImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <figcaption class="section-hero-three__caption">
                            <?php if(get_sub_field('hero_style_three_slider_title_h1')) { ?>
                                <div class="section-hero-three__row">
                                    <header class="section-hero-three__header">
                                        <h1 class="section-hero-three__title">
                                            <?php the_sub_field('hero_style_three_slider_title_h1'); ?>
                                        </h1>
                                    </header>
                                </div>
                            <?php } ?>
                            <?php if(get_sub_field('hero_style_three_slider_title_h2')) { ?>
                                <div class="section-hero-three__row">
                                    <header class="section-hero-three__header">
                                        <h2 class="section-hero-three__title">
                                            <?php the_sub_field('hero_style_three_slider_title_h2'); ?>
                                        </h2>
                                    </header>
                                </div>
                            <?php } ?>
                            <?php if(get_sub_field('hero_style_three_slider_desc')) { ?>
                                <div class="section-hero-three__row">
                                    <div class="section-hero-three__desc">
                                        <?php the_sub_field('hero_style_three_slider_desc'); ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                            $link = get_sub_field('hero_style_three_slider_button_url');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="section-hero-three__row">
                                    <?php
                                    $button_type = get_sub_field('hero_style_three_slider_button_type');
                                    $button_size = get_sub_field('hero_style_three_slider_button_size');
                                    $button_mode = get_sub_field('hero_style_three_slider_button_mode');
                                    $button_icon = get_sub_field('hero_style_three_slider_button_icon');
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
                                       class="section__btn <?php if ($button_type['hero_style_three_slider_button_primary']) { ?>section__btn--primary<?php } ?> <?php if ($button_type['hero_style_three_slider_button_secondary']) { ?>section__btn--secondary<?php } ?> <?php if ($button_type['hero_style_three_slider_button_tertiary']) { ?>section__btn--tertiary<?php } ?> <?php if ($button_size['hero_style_three_slider_button_small']) { ?>section__btn--small<?php } ?> <?php if ($button_size['hero_style_three_slider_button_large']) { ?>section__btn--large<?php } ?> <?php if ($button_mode['hero_style_three_slider_button_light']) { ?>section__btn--light<?php } ?> <?php if ($button_mode['hero_style_three_slider_button_dark']) { ?>section__btn--dark<?php } ?> <?php if ($button_icon['hero_style_three_slider_button_icon_left']) { ?>section__btn--left<?php } ?> <?php if ($button_icon['hero_style_three_slider_button_icon_right']) { ?>section__btn--right<?php } ?>">
                                        <?php if ($button_icon['hero_style_three_slider_button_icon_img']) { ?>
                                            <img src="<?php echo esc_url( $button_icon['hero_style_three_slider_button_icon_img']['url'] ); ?>" alt="<?php echo esc_attr( $button_icon['hero_style_three_slider_button_icon_img']['alt'] ); ?>" class="svg-convert" />
                                        <?php } ?>
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="section-hero-three__controls">
            <div class="section-hero-three__control">
                <div class="section-hero-three__arrow section-hero-three__arrow--prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="" class="svg-convert">
                </div>
            </div>
            <div class="section-hero-three__control">
                <div class="section-hero-three__number section-hero-three__number--current"></div>
            </div>
            <div class="section-hero-three__control">
                /
            </div>
            <div class="section-hero-three__control">
                <div class="section-hero-three__number section-hero-three__number--total"></div>
            </div>
            <div class="section-hero-three__control">
                <div class="section-hero-three__arrow section-hero-three__arrow--next">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="" class="svg-convert">
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
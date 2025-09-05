<?php
$controls_mode = get_sub_field('hero_style_five_slider_controls_mode');
?>
<section <?php if(get_sub_field('hero_style_five_slider_section_id')) { ?>id="<?php the_sub_field('hero_style_five_slider_section_id'); ?>"<?php } ?> class="section-hero-five <?php if (get_sub_field('hero_style_five_slider_section_reverse')) { ?>section-hero-five__reverse<?php } ?> section-hero-five__dots <?php if ($controls_mode['hero_style_five_slider_control_light']) { ?>section-hero-five__dots--light<?php } ?> <?php if ($controls_mode['hero_style_five_slider_control_dark']) { ?>section-hero-five__dots--dark<?php } ?>" style="<?php if (get_sub_field('hero_style_five_slider_section_background_color')) { ?>background-color: <?php the_sub_field('hero_style_five_slider_section_background_color'); ?>;<?php } ?> <?php if (get_sub_field('hero_style_five_slider_section_color')) { ?>color: <?php the_sub_field('hero_style_five_slider_section_color'); ?>;<?php } ?>">
    <?php if (have_rows('hero_style_five_slider')): ?>
        <div class="section-hero-five__slider">
            <?php while (have_rows('hero_style_five_slider')): the_row(); ?>
                <div class="section-hero-five__item">
                    <figure class="section-hero-five__img">
                        <?php
                        $image = get_sub_field('hero_style_five_slider_img');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php endif; ?>
                    </figure>
                    <div class="section-hero-five__caption">
                        <div class="section-hero-five__inner">
                            <?php if (get_sub_field('hero_style_five_slider_title_h1') || get_sub_field('hero_style_five_slider_title_h2')) { ?>
                                <div class="section-hero-five__row">
                                    <header class="section-hero-five__header">
                                        <?php if(get_sub_field('hero_style_five_slider_title_h1')) { ?>
                                            <h1 class="section-hero-five__title">
                                                <?php the_sub_field('hero_style_five_slider_title_h1'); ?>
                                            </h1>
                                        <?php } ?>
                                        <?php if(get_sub_field('hero_style_five_slider_title_h2')) { ?>
                                            <h2 class="section-hero-five__title">
                                                <?php the_sub_field('hero_style_five_slider_title_h2'); ?>
                                            </h2>
                                        <?php } ?>
                                    </header>
                                </div>
                            <?php } ?>
                            <?php if (get_sub_field('hero_style_five_slider_desc')) { ?>
                                <div class="section-hero-five__row">
                                    <div class="section-hero-five__desc">
                                        <?php the_sub_field('hero_style_five_slider_desc'); ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                            $link = get_sub_field('hero_style_five_slider_button_url');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="section-hero-five__row">
                                    <?php
                                    $button_type = get_sub_field('hero_style_five_slider_button_type');
                                    $button_size = get_sub_field('hero_style_five_slider_button_size');
                                    $button_mode = get_sub_field('hero_style_five_slider_button_mode');
                                    $button_icon = get_sub_field('hero_style_five_slider_button_icon');
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
                                       class="section__btn <?php if ($button_type['hero_style_five_slider_button_primary']) { ?>section__btn--primary<?php } ?> <?php if ($button_type['hero_style_five_slider_button_secondary']) { ?>section__btn--secondary<?php } ?> <?php if ($button_type['hero_style_five_slider_button_tertiary']) { ?>section__btn--tertiary<?php } ?> <?php if ($button_size['hero_style_five_slider_button_small']) { ?>section__btn--small<?php } ?> <?php if ($button_size['hero_style_five_slider_button_large']) { ?>section__btn--large<?php } ?> <?php if ($button_size['hero_style_five_slider_button_small']) { ?>section__btn--small<?php } ?> <?php if ($button_size['hero_style_five_slider_button_large']) { ?>section__btn--large<?php } ?> <?php if ($button_mode['hero_style_five_slider_button_light']) { ?>section__btn--light<?php } ?> <?php if ($button_mode['hero_style_five_slider_button_dark']) { ?>section__btn--dark<?php } ?> <?php if ($button_icon['hero_style_five_slider_button_icon_left']) { ?>section__btn--left<?php } ?> <?php if ($button_icon['hero_style_five_slider_button_icon_right']) { ?>section__btn--right<?php } ?>">
                                        <?php if ($button_icon['hero_style_five_slider_button_icon_img']) { ?>
                                            <img src="<?php echo esc_url( $button_icon['hero_style_five_slider_button_icon_img']['url'] ); ?>" alt="<?php echo esc_attr( $button_icon['hero_style_five_slider_button_icon_img']['alt'] ); ?>" class="svg-convert" />
                                        <?php } ?>
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>
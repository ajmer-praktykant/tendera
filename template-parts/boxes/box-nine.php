<section <?php if (get_sub_field('banner_style_nine_section_id')) { ?>id="<?php the_sub_field('banner_style_nine_section_id'); ?>"<?php } ?> class="<?php if (get_sub_field('banner_style_nine_section_padding_top')) { ?>section__pt<?php } ?> <?php if (get_sub_field('banner_style_nine_section_padding_bottom')) { ?>section__pb<?php } ?> <?php if (get_sub_field('banner_style_nine_section_margin_top')) { ?>section__mt<?php } ?> <?php if (get_sub_field('banner_style_nine_section_margin_bottom')) { ?>section__mb<?php } ?> section-banner-style-nine">
    <div class="container">
        <?php if (get_sub_field('banner_style_nine_section_title_h1')) { ?>
            <div class="section__row">
                <header class="section__header">
                    <h1 class="section__title">
                        <?php the_sub_field('banner_style_nine_section_title_h1'); ?>
                    </h1>
                </header>
            </div>
        <?php } ?>
        <?php if (get_sub_field('banner_style_nine_section_title_h2')) { ?>
            <div class="section__row">
                <header class="section__header">
                    <h2 class="section__title">
                        <?php the_sub_field('banner_style_nine_section_title_h2'); ?>
                    </h2>
                </header>
            </div>
        <?php } ?>
        <?php if (get_sub_field('banner_style_nine_section_desc')) { ?>
            <div class="section__row">
                <div class="section__desc">
                    <?php the_sub_field('banner_style_nine_section_desc'); ?>
                </div>
            </div>
        <?php } ?>
        <?php if( have_rows('banner_style_nine') ): ?>
            <div class="section__row">
                <div class="section-banner-style-nine__boxes">
                    <?php while( have_rows('banner_style_nine') ): the_row(); ?>
                        <div class="section-banner-style-nine__box">
                            <?php if(get_sub_field('banner_style_nine_button_url')) {
                                $link = get_sub_field('banner_style_nine_button_url');
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <?php if (get_sub_field('banner_style_nine_suptitle')) { ?>
                                    <div class="section-banner-style-nine__row">
                                        <div class="section-banner-style-nine__suptitle">
                                            <?php the_sub_field('banner_style_nine_suptitle'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (get_sub_field('banner_style_nine_title')) { ?>
                                    <div class="section-banner-style-nine__row">
                                        <header class="section-banner-style-nine__header">
                                            <h3 class="section-banner-style-nine__title">
                                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                                    <?php the_sub_field('banner_style_nine_title'); ?>
                                                </a>
                                            </h3>
                                        </header>
                                    </div>
                                <?php } ?>
                                <div class="section-banner-style-nine__row">
                                    <figure class="section-banner-style-nine__img">
                                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                            <?php
                                            $image = get_sub_field('banner_style_nine_img');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </a>
                                    </figure>
                                </div>
                                <?php if (get_sub_field('banner_style_nine_desc')) { ?>
                                    <div class="section-banner-style-nine__row">
                                        <div class="section-banner-style-nine__desc">
                                            <?php the_sub_field('banner_style_nine_desc'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="section-banner-style-nine__row">
                                    <?php
                                    $button_type = get_sub_field('banner_style_nine_button_type');
                                    $button_size = get_sub_field('banner_style_nine_button_size');
                                    $button_mode = get_sub_field('banner_style_nine_button_mode');
                                    $button_icon = get_sub_field('banner_style_nine_button_icon');
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="section__btn <?php if ($button_type['banner_style_nine_button_primary']) { ?>section__btn--primary<?php } ?> <?php if ($button_type['banner_style_nine_button_secondary']) { ?>section__btn--secondary<?php } ?> <?php if ($button_type['banner_style_nine_button_tertiary']) { ?>section__btn--tertiary<?php } ?> <?php if ($button_size['banner_style_nine_button_small']) { ?>section__btn--small<?php } ?> <?php if ($button_size['banner_style_nine_button_large']) { ?>section__btn--large<?php } ?> <?php if ($button_mode['banner_style_nine_button_light']) { ?>section__btn--light<?php } ?> <?php if ($button_mode['banner_style_nine_button_dark']) { ?>section__btn--dark<?php } ?> <?php if ($button_icon['banner_style_nine_button_icon_left']) { ?>section__btn--left<?php } ?> <?php if ($button_icon['banner_style_nine_button_icon_right']) { ?>section__btn--right<?php } ?>">
                                        <?php if ($button_icon['banner_style_nine_button_icon_img']) { ?>
                                            <img src="<?php echo esc_url( $button_icon['banner_style_nine_button_icon_img']['url'] ); ?>" alt="<?php echo esc_attr( $button_icon['banner_style_nine_button_icon_img']['alt'] ); ?>" class="svg-convert" />
                                        <?php } ?>
                                        <span><?php echo esc_html( $link_title ); ?></span>
                                    </a>
                                </div>
                            <?php }
                            else { ?>
                                <?php if (get_sub_field('banner_style_nine_suptitle')) { ?>
                                    <div class="section-banner-style-nine__row">
                                        <div class="section-banner-style-nine__suptitle">
                                            <?php the_sub_field('banner_style_nine_suptitle'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if (get_sub_field('banner_style_nine_title')) { ?>
                                    <div class="section-banner-style-nine__row">
                                        <header class="section-banner-style-nine__header">
                                            <h3 class="section-banner-style-nine__title">
                                                <?php the_sub_field('banner_style_nine_title'); ?>
                                            </h3>
                                        </header>
                                    </div>
                                <?php } ?>
                                <div class="section-banner-style-nine__row">
                                    <figure class="section-banner-style-nine__img">
                                        <?php
                                        $image = get_sub_field('banner_style_nine_img');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </figure>
                                </div>
                                <?php if (get_sub_field('banner_style_nine_desc')) { ?>
                                    <div class="section-banner-style-nine__row">
                                        <div class="section-banner-style-nine__desc">
                                            <?php the_sub_field('banner_style_nine_desc'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $link = get_sub_field('banner_style_nine_section_button_url');
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="section__row">
                <?php
                $button_type = get_sub_field('banner_style_nine_section_button_type');
                $button_size = get_sub_field('banner_style_nine_section_button_size');
                $button_mode = get_sub_field('banner_style_nine_section_button_mode');
                $button_icon = get_sub_field('banner_style_nine_section_button_icon');
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="section__btn <?php if ($button_type['banner_style_nine_section_button_primary']) { ?>section__btn--primary<?php } ?> <?php if ($button_type['banner_style_nine_section_button_secondary']) { ?>section__btn--secondary<?php } ?> <?php if ($button_type['banner_style_nine_section_button_tertiary']) { ?>section__btn--tertiary<?php } ?> <?php if ($button_size['banner_style_nine_section_button_small']) { ?>section__btn--small<?php } ?> <?php if ($button_size['banner_style_nine_section_button_large']) { ?>section__btn--large<?php } ?> <?php if ($button_mode['banner_style_nine_section_button_light']) { ?>section__btn--light<?php } ?> <?php if ($button_mode['banner_style_nine_section_button_dark']) { ?>section__btn--dark<?php } ?> <?php if ($button_icon['banner_style_nine_section_button_icon_left']) { ?>section__btn--left<?php } ?> <?php if ($button_icon['banner_style_nine_section_button_icon_right']) { ?>section__btn--right<?php } ?>">
                    <?php if ($button_icon['banner_style_nine_section_button_icon_img']) { ?>
                        <img src="<?php echo esc_url( $button_icon['banner_style_nine_section_button_icon_img']['url'] ); ?>" alt="<?php echo esc_attr( $button_icon['banner_style_nine_section_button_icon_img']['alt'] ); ?>" class="svg-convert" />
                    <?php } ?>
                    <span><?php echo esc_html( $link_title ); ?></span>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
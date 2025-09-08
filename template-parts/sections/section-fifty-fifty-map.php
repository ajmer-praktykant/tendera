<section <?php if (get_sub_field('fifty_fifty_map_section_id')) { ?>id="<?php the_sub_field('fifty_fifty_map_section_id'); ?>"<?php } ?> class="<?php if (get_sub_field('fifty_fifty_map_section_padding_top')) { ?>section__pt<?php } ?> <?php if (get_sub_field('fifty_fifty_map_section_padding_bottom')) { ?>section__pb<?php } ?> <?php if (get_sub_field('fifty_fifty_map_section_margin_top')) { ?>section__mt<?php } ?> <?php if (get_sub_field('fifty_fifty_map_section_margin_bottom')) { ?>section__mb<?php } ?> section-fifty-fifty-map <?php if (get_sub_field('fifty_fifty_map_section_reverse')) { ?>section-fifty-fifty-map__reverse<?php } ?>">
    <?php if (get_sub_field('fifty_fifty_map_section_title_h1')) { ?>
        <div class="section__row">
            <div class="container">
                <header class="section__header">
                    <h1 class="section__title">
                        <?php the_sub_field('fifty_fifty_map_section_title_h1'); ?>
                    </h1>
                </header>
            </div>
        </div>
    <?php } ?>
    <?php if (get_sub_field('fifty_fifty_map_section_title_h2')) { ?>
        <div class="section__row">
            <div class="container">
                <header class="section__header">
                    <h2 class="section__title">
                        <?php the_sub_field('fifty_fifty_map_section_title_h2'); ?>
                    </h2>
                </header>
            </div>
        </div>
    <?php } ?>
    <?php if (get_sub_field('fifty_fifty_map_section_desc')) { ?>
        <div class="section__row">
            <div class="container">
                <div class="section__desc">
                    <?php the_sub_field('fifty_fifty_map_section_desc'); ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="section__row">
        <div class="section section-fifty-fifty-map__content">
            <div class="section-fifty-fifty-map__iframe">
                <?=get_sub_field('fifty_fifty_map_section_iframe')?>
            </div>
            <div class="container">
                <div class="section-fifty-fifty-map__columns">
                    <div class="section-fifty-fifty-map__column">
                        <?php if (get_sub_field('fifty_fifty_map_section_desc_column')) { ?>
                            <div class="section-fifty-fifty-map__row">
                                <div class="section__desc">
                                    <?php the_sub_field('fifty_fifty_map_section_desc_column'); ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if( have_rows('fifty_fifty_map') ): ?>
                            <div class="section-fifty-fifty-map__row">
                                <div class="section-fifty-fifty-map__boxes">
                                    <?php while( have_rows('fifty_fifty_map') ): the_row(); ?>
                                        <div class="section-fifty-fifty-map__box">
                                            <div class="section-fifty-fifty-map__desc">
                                                <?php if (get_sub_field('fifty_fifty_map_title')) { ?>
                                                    <h3><?php the_sub_field('fifty_fifty_map_title'); ?></h3>
                                                <?php } ?>
                                                <?php if( have_rows('fifty_fifty_map_icons') ): ?>
                                                    <ul>
                                                        <?php while( have_rows('fifty_fifty_map_icons') ): the_row(); ?>
                                                            <li>
                                                                <figure class="section-fifty-fifty-map__icon">
                                                                    <?php
                                                                    $image = get_sub_field('fifty_fifty_map_icon');
                                                                    if( !empty( $image ) ): ?>
                                                                        <img class="svg-convert" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                                    <?php endif; ?>
                                                                    <?php if (get_sub_field('fifty_fifty_map_caption')) { ?>
                                                                        <figcaption class="section-fifty-fifty-map__caption">
                                                                            <?php the_sub_field('fifty_fifty_map_caption'); ?>
                                                                        </figcaption>
                                                                    <?php } ?>
                                                                </figure>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $link = get_sub_field('fifty_fifty_map_section_button_url');
    if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="section__row">
            <div class="container">
                <?php
                $button_type = get_sub_field('fifty_fifty_map_section_button_type');
                $button_size = get_sub_field('fifty_fifty_map_section_button_size');
                $button_mode = get_sub_field('fifty_fifty_map_section_button_mode');
                $button_icon = get_sub_field('fifty_fifty_map_section_button_icon');
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="section__btn <?php if ($button_type['fifty_fifty_map_section_button_primary']) { ?>section__btn--primary<?php } ?> <?php if ($button_type['fifty_fifty_map_section_button_secondary']) { ?>section__btn--secondary<?php } ?> <?php if ($button_type['fifty_fifty_map_section_button_tertiary']) { ?>section__btn--tertiary<?php } ?> <?php if ($button_size['fifty_fifty_map_section_button_small']) { ?>section__btn--small<?php } ?> <?php if ($button_size['fifty_fifty_map_section_button_large']) { ?>section__btn--large<?php } ?> <?php if ($button_mode['fifty_fifty_map_section_button_light']) { ?>section__btn--light<?php } ?> <?php if ($button_mode['fifty_fifty_map_section_button_dark']) { ?>section__btn--dark<?php } ?> <?php if ($button_icon['fifty_fifty_map_section_button_icon_left']) { ?>section__btn--left<?php } ?> <?php if ($button_icon['fifty_fifty_map_section_button_icon_right']) { ?>section__btn--right<?php } ?>">
                    <?php if ($button_icon['fifty_fifty_map_section_button_icon_img']) { ?>
                        <img src="<?php echo esc_url( $button_icon['fifty_fifty_map_section_button_icon_img']['url'] ); ?>" alt="<?php echo esc_attr( $button_icon['fifty_fifty_map_section_button_icon_img']['alt'] ); ?>" class="svg-convert" />
                    <?php } ?>
                    <span><?php echo esc_html( $link_title ); ?></span>
                </a>
            </div>
        </div>
    <?php endif; ?>
</section>
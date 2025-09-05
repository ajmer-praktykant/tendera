<section <?php if(get_sub_field('hero_style_one_slider_section_id')) { ?>id="<?php the_sub_field('hero_style_one_slider_section_id'); ?>"<?php } ?> class="section-hero-one">
    <?php if( have_rows('hero_style_one_slider') ): ?>
        <div class="section-hero-one__slider">
            <?php while( have_rows('hero_style_one_slider') ): the_row(); ?>
                <div class="section-hero-one__item">
                    <figure class="section-hero-one__img">
                        <?php
                        $image = get_sub_field('hero_style_one_slider_img');
                        if( !empty( $image ) ): ?>
                            <img class="animated" data-animation-in="zoomInImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <figcaption class="section-hero-one__caption">
                            <div class="section-hero-one__inner">
                                <?php if(get_sub_field('hero_style_one_slider_title_h1')) { ?>
                                    <div class="section-hero-one__row">
                                        <header class="section-hero-one__header">
                                            <h1 class="section-hero-one__title">
                                                <?php the_sub_field('hero_style_one_slider_title_h1'); ?>
                                            </h1>
                                        </header>
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('hero_style_one_slider_title_h2')) { ?>
                                    <div class="section-hero-one__row">
                                        <header class="section-hero-one__header">
                                            <h2 class="section-hero-one__title">
                                                <?php the_sub_field('hero_style_one_slider_title_h2'); ?>
                                            </h2>
                                        </header>
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('hero_style_one_slider_desc')) { ?>
                                    <div class="section-hero-one__row">
                                        <div class="section-hero-one__desc">
                                            <?php the_sub_field('hero_style_one_slider_desc'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="section-hero-one__item">
                    <figure class="section-hero-one__img">
                        <?php
                        $image = get_sub_field('hero_style_one_slider_img');
                        if( !empty( $image ) ): ?>
                            <img class="animated" data-animation-in="zoomInImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <figcaption class="section-hero-one__caption">
                            <div class="section-hero-one__inner">
                                <?php if(get_sub_field('hero_style_one_slider_title_h1')) { ?>
                                    <div class="section-hero-one__row">
                                        <header class="section-hero-one__header">
                                            <h1 class="section-hero-one__title">
                                                <?php the_sub_field('hero_style_one_slider_title_h1'); ?>
                                            </h1>
                                        </header>
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('hero_style_one_slider_title_h2')) { ?>
                                    <div class="section-hero-one__row">
                                        <header class="section-hero-one__header">
                                            <h2 class="section-hero-one__title">
                                                <?php the_sub_field('hero_style_one_slider_title_h2'); ?>
                                            </h2>
                                        </header>
                                    </div>
                                <?php } ?>
                                <?php if(get_sub_field('hero_style_one_slider_desc')) { ?>
                                    <div class="section-hero-one__row">
                                        <div class="section-hero-one__desc">
                                            <?php the_sub_field('hero_style_one_slider_desc'); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="section-hero-one__counter">
            0
            <div class="section-hero-one__counter--number"></div>
        </div>
        <div class="section-hero-one__arrow section-hero-one__arrow--prev section-hero-one__arrow--light section-hero-one__arrow--dark">
            <img class="svg-convert" src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" class="svg-convert">
        </div>
        <div class="section-hero-one__arrow section-hero-one__arrow--next section-hero-one__arrow--light section-hero-one__arrow--dark">
            <img class="svg-convert" src="<?php echo get_template_directory_uri(); ?>/img/next.svg" class="svg-convert">
        </div>
    <?php endif; ?>
</section>
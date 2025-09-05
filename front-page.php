<?php /* Template Name: Strona główna */ ?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/flexible', 'content' ); ?>
<section id="home-blog" class="section section-banner-style-four">
    <div class="container">
    <div class="section__row">
            <header class="section__header">
                <h2 class="section__title">
                    Blog
                </h2>
            </header>
        </div>
        <?php
        $myposts = get_posts(array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'orderby' => 'post_date',
            'order' => 'DESC'
        ));
        if ($myposts) { ?>
            <div class="section__row">
                <div class="section-banner-style-four__boxes">
                <?php foreach ($myposts as $p) : setup_postdata($p); ?>
                    <div class="section-banner-style-four__box">
                        <figure class="section-banner-style-four__img">
                        <a href="<?php echo get_the_permalink($p->ID); ?>">
							<?php
					   $image_id = get_post_thumbnail_id($p->ID);
					   $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
							?>
							<img src="<?php echo get_the_post_thumbnail_url($p->ID, 'large'); ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_alt; ?>">
                        </a>
                        <figcaption class="section-banner-style-four__caption">
                            <div class="section-banner-style-four__row">
                                <h3 class="section-banner-style-four__title">
                                    <a href="<?php echo get_the_permalink($p->ID); ?>">
                                        <?php echo get_the_title($p->ID); ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="section-banner-style-four__row">
                                <div class="section-banner-style-four__desc">
                                <?php
                                echo wp_trim_words( get_the_content($p->ID), 30, '...' );
                                ?>
                                </div>
                            </div>
                            <div class="section-banner-style-four__row">
                                <a href="<?php echo get_the_permalink($p->ID); ?>" class="section__btn section__btn--primary section__btn--dark section__btn--large">Czytaj więcej</a>
                            </div>
                        </figcaption>
                        </figure>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        <?php }
        else { ?>
            <div class="section__row">
                <div class="section__desc">
                    <p><?php esc_html_e( 'Artykuły do bloga pojawią się niebawem' ); ?></p>
                </div>
            </div>
        <?php } ?>
        <div class="section__row">
        <a href="<?php echo get_home_url(); ?>/blog" class="section__btn section__btn--secondary section__btn--dark section__btn--large">Zobacz wszystkie</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
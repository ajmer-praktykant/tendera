<?php get_header(); ?>
<section class="section section-banner">
    <div class="container">
        <div class="section-banner__columns">
            <div class="section-banner__column">
                <header class="section__header">
                    <h1 class="section__title">
                        Blog
                    </h1>
                </header>
            </div>
            <div class="section-banner__column">
                <img src="<?php the_field('section_banner_img', get_option('page_for_posts')); ?>">
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/sections/section', 'breadcrumbs' ); ?>
<section class="section section-banner-style-four">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            
            <div class="section__row">
                <div class="section-banner-style-four__boxes">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="section-banner-style-four__box">
                        <figure class="section-banner-style-four__img">
                        <a href="<?php the_permalink(); ?>">
                            <?php
					   $image_id = get_post_thumbnail_id(get_the_ID());
					   $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
							?>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_alt; ?>">
                        </a>
                        <figcaption class="section-banner-style-four__caption">
                            <div class="section-banner-style-four__row">
                                <h3 class="section-banner-style-four__title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="section-banner-style-four__row">
                                <div class="section-banner-style-four__desc">
                                <?php
                                echo wp_trim_words( get_the_content(), 30, '...' );
                                ?>
                                </div>
                            </div>
                            <div class="section-banner-style-four__row">
                                <a href="<?php the_permalink(); ?>" class="section__btn section__btn--primary section__btn--dark section__btn--large">Czytaj więcej</a>
                            </div>
                        </figcaption>
                        </figure>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
       <?php else : ?>
            <div class="section__row">
                <div class="section__desc">
                    <p><?php esc_html_e( 'Artykuły do bloga pojawią się niebawem' ); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(get_the_posts_pagination()) : ?>
            <div class="section__pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>

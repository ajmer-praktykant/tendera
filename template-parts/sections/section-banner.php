<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="section section-banner">
    <div class="container">
        <div class="section-banner__columns">
            <div class="section-banner__column">
                <header class="section__header">
                    <h1 class="section__title">
                        <?php the_title(); ?>
                    </h1>
                </header>
            </div>
            <div class="section-banner__column">
                <img src="<?php the_field('section_banner_img'); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<?php endwhile; else : ?>
<?php endif; ?>
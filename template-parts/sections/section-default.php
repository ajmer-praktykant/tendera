<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if(get_the_content()) { ?>
<section class="section section-default">
    <div class="container">
        <div class="section__row">
            <div class="section__desc">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php endwhile; else : ?>
<?php endif; ?>
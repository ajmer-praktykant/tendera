<?php if (have_rows('additionals_sections')): ?>
    <?php while (have_rows('additionals_sections')): the_row(); ?>
        <?php if (get_row_layout() == 'hero_style_one_slider_section'): ?>
            <?php get_template_part( 'template-parts/sliders/slider', 'one' ); ?>
        <?php elseif (get_row_layout() == 'hero_style_two_slider_section'): ?>
            <?php get_template_part( 'template-parts/sliders/slider', 'two' ); ?>
        <?php elseif (get_row_layout() == 'hero_style_three_slider_section'): ?>
            <?php get_template_part( 'template-parts/sliders/slider', 'three' ); ?>
        <?php elseif (get_row_layout() == 'hero_style_four_slider_section'): ?>
            <?php get_template_part( 'template-parts/sliders/slider', 'four' ); ?>
        <?php elseif (get_row_layout() == 'hero_style_five_slider_section'): ?>
            <?php get_template_part( 'template-parts/sliders/slider', 'five' ); ?>
        <?php elseif (get_row_layout() == 'full_width_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'full-width' ); ?>
        <?php elseif (get_row_layout() == 'full_width_parallax_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'full-width-parallax' ); ?>
        <?php elseif (get_row_layout() == 'fifty_fifty_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'fifty-fifty' ); ?>
        <?php elseif (get_row_layout() == 'fifty_fifty_container_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'fifty-fifty-container' ); ?>
        <?php elseif (get_row_layout() == 'fifty_fifty_txt_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'fifty-fifty-txt' ); ?>
        <?php elseif (get_row_layout() == 'fifty_fifty_map_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'fifty-fifty-map' ); ?>
        <?php elseif (get_row_layout() == 'faq_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'faq' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_one_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'one' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_two_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'two' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_three_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'three' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_four_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'four' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_five_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'five' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_six_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'six' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_seven_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'seven' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_eight_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'eight' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_nine_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'nine' ); ?>
        <?php elseif (get_row_layout() == 'banner_style_ten_section'): ?>
            <?php get_template_part( 'template-parts/boxes/box', 'ten' ); ?>
        <?php elseif (get_row_layout() == 'map_section'): ?>
            <?php get_template_part( 'template-parts/sections/section', 'map' ); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('universal_sections', 'option')): ?>
    <?php while (have_rows('universal_sections', 'option')): the_row(); ?>
        <?php
        switch (get_row_layout()):
            case 'certificates':
                get_template_part( 'template-parts/sections/section', 'certificates' ); 
                break;
        endswitch;
        ?>
    <?php endwhile; ?>
<?php endif; ?>
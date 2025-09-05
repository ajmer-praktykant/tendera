<?php
$content_full['subheading_style'] = get_sub_field('header_style');
$content_full['horizontal_alignment'] = '';
$content_full['is_multi'] = '';

$content_full['heading'] = false;
$content_full['subheading'] = get_sub_field('heading');
$content_full['is_bold'] = get_sub_field('bold');
$tag_html = get_sub_field('heading');
$content_full['certificates'] = get_sub_field('certificates');
?>

<?=setSectionTag($tag_html, 'open', getSectionContent(getSectionClass('certificates'), getSectionStyle()));?>
    <?php get_template_part( 'template-parts/sections/elements/certificates', null, $content_full ); ?>
<?=setSectionTag($tag_html, 'close', '');?>
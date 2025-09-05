<?php
$subheading_style = $args['subheading_style'];
$horizontal_alignment = $args['horizontal_alignment'];
$is_multi = $args['is_multi'];

$is_heading = $args['heading'];
$subheading = $args['subheading'];
$is_bold = $args['is_bold'];
$certificates = $args['certificates'];    

if($is_heading) : $subheading_tag = "h3"; else : $subheading_tag = "h2"; endif;
?>
<div class="container<?=$is_multi;?><?=$horizontal_alignment;?>">
    <?php if(!empty($subheading)): ?>
        <header class="section__header">
            <<?=$subheading_tag;?> class="section__title <?=$subheading_style;?>">
                <?php makeBold($is_bold, $subheading); ?>
            </<?=$subheading_tag;?>>
        </header>
    <?php endif; ?>
    <?php if(!empty($certificates)): ?>
        <div class="section__certificates">
            <?php foreach($certificates as $certificate) : ?>
                <a href="<?=$certificate['url'];?>" data-lightbox="roadtrip" class="certificates__item">
                    <img src="<?=$certificate['url'];?>">
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
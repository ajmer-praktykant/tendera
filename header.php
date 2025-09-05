<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Kancelaria Adwokacka - Jagoda Tendera",
            "image": "http://jtendera.pl/wp-content/uploads/2023/01/jagoda_tendera_logo_obszar-roboczy-2.png",
            "@id": "https://jtendera.pl/",
            "url": "https://jtendera.pl/",
            "telephone": "531 844 459",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "ul. Zbożowa 2C/14",
                "addressLocality": "Kraków",
                "postalCode": "30-002",
                "addressCountry": "Polska",
                "addressRegion": "mazowieckie"
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "09:00",
                    "closes": "18:00"
                }
            ]
        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3C2XN45ZYK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3C2XN45ZYK');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PNSNR2Z');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNSNR2Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="header">
    <div class="header__row">
        <div class="container">
            <div class="header__columns">
                <?php if (have_rows('header_details', 'option')): ?>
                    <div class="header__column">
                        <div class="header__details">
                            <?php while (have_rows('header_details', 'option')): the_row(); ?>
                                <div class="header__detail">
                                    <?php
                                    $image = get_sub_field('header_detail_icon');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                                    <?php endif; ?>
                                    <div class="header__desc">
                                        <?=get_sub_field('header_detail_desc');?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('social_media', 'option')): ?>
                    <div class="header__column">
                        <div class="header__socials">
                            <?php while (have_rows('social_media', 'option')): the_row(); ?>
                                <div class="header__social">
                                    <a href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
                                        <?php
                                        $image = get_sub_field('social_media_icon');
                                        if (!empty($image)): ?>
                                            <img id="<?php the_sub_field('social_media_header_id'); ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="header__row">
        <div class="container">
            <div class="header__columns">
                <div class="header__column">
                    <a href="<?php echo get_home_url(); ?>" class="header__logo">
                        <?php
                        $image = get_field('logo', 'option');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="header__column">
                    <nav class="header__nav">
                        <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
                    </nav>
                </div>
                <div class="header__column">
                    <div class="header__icons">
                        <?php if (have_rows('header_icons', 'option')): ?>
                            <?php while (have_rows('header_icons', 'option')): the_row(); ?>
                                <div class="header__icon">
                                    <a href="<?php the_sub_field('header_icon_url'); ?>">
                                        <?php
                                        $image = get_sub_field('header_icon_img', 'option');
                                        if (!empty($image)): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert"/>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (get_field('header_search', 'option')) { ?>
                            <div class="header__icon">
                                <div class="header__search">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/magnifying-glass.svg" class="svg-convert">
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (get_field('header_lang', 'option')) { ?>
                            <div class="header__icon">
                                <nav class="header__lang">
                                    <?php wp_nav_menu(array('theme_location' => 'lang_menu')); ?>
                                </nav>
                            </div>
                        <?php } ?>
                    </div>
                </div>
				<?php if (have_rows('mobile_icons', 'option')): ?>
					<div class="header__column contact-icons">
						<ul>
							<?php while (have_rows('mobile_icons', 'option')): the_row(); ?>
								<?php 
								$url = get_sub_field('mobile_link', 'option');
								if(!empty($url)) :
								?>
								<li>
									<a href="<?=$url['url']?>" target="<?=$url['target']?>">
										<div>
											<?php
												$image = get_sub_field('mobile_ico');
												if (!empty($image)): 
											?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="svg-convert" width="16" height="16"/>
											<?php endif; ?>
										</div>
										<?php if(!empty($url)) : echo $url['title']; endif; ?>
									</a>
								</li>
								<?php endif; ?>
							<?php endwhile; ?>                                    
						</ul>
					</div>
				<?php endif; ?>
                <div class="header__column">
                    <div class="header__hamburger">
                        <button class="hamburger">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/open-menu.png">
                        </button>
                        <button class="cross">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/close-menu.png">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="menu-mobile">
    <div class="container">
        <nav class="menu-mobile__nav">
            <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
        </nav>
    </div>
</div>
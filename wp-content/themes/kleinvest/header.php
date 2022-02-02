<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <title><?php echo carbon_get_theme_option('site_title') ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Montserrat-VariableFont_wght.ttf"
          rel="stylesheet">
	
	<?php //wp_head(); ?>
</head>
<body>

<section class="header">
    <div class="container">
        <div class="header_inner">
            <div class="header_left">
                <div class="logo">
                    <h3 class="logo_txt">Kleinvest</h3>
                </div>
                <div class="nav_burger">
                    <div class="burger"></div>
                    <div class="nav">
						<?php
						$menu_header_list = wp_get_nav_menu_items('nav_main_header');
						$menuLocations    = get_nav_menu_locations();
						$menuID           = $menuLocations['nav_main_header'];
						$primaryNav       = wp_get_nav_menu_items($menuID);
						foreach ($primaryNav as $item) {
							echo "<div class='nav_item'><a class='link' href='$item->url'>$item->title</a></div>";
						}
						?>
                    </div>
                </div>
            </div>
            <div class="header_right">
                <div class="user_nav">
                    <div class="icon"></div>
                    <div class="unlogged">
                        <button class="btn_text login">Login</button>
                        <button class="btn_text register">Become a member</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
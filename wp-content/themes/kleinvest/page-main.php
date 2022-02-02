<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<?php $pageID = get_the_ID() ?>

    <section class="tagline">
        <div class="container">
            <div class="tagline_inner">
                <h1 class="tagline_txt"><?php echo carbon_get_post_meta($pageID, 'tagline_txt') ?></h1>
                <h4 class="quote"><?php echo carbon_get_post_meta($pageID, 'quote') ?></h4>
                <div class="btns">
                    <button class="get_now_btn btn_text">Get Quote Now</button>
                    <button class="more_btn btn_text">Learn More</button>
                </div>
            </div>
        </div>
    </section>


    <section class="features">
        <div class="container">
            <div class="features_inner">
                <div class="features_title">
                    <h2 class="title"><?php echo carbon_get_post_meta($pageID, 'features_title') ?></h2>
                    <p class="subtitle"><?php echo carbon_get_post_meta($pageID, 'features_subtitle') ?></p>
                </div>
                <div class="features_list">
					<?php $feature_list = carbon_get_post_meta($pageID, 'features_slider');
					foreach ($feature_list as $item) :?>
                        <div class="features_item">
                            <div class="icon">
                                <img alt=""
                                     src="<?php echo $item['feature_icon'] ?>">
                            </div>
                            <div class="content">
                                <h5 class="title"><?php echo $item['feature_title'] ?></h5>
                                <p class="subtitle"><?php echo $item['feature_subtitle'] ?></p>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="testimonials_inner">
                <div class="head">
                    <h2 class="title"><?php echo carbon_get_post_meta($pageID, 'testimonials_title') ?></h2>
                    <p class="subtitle"><?php echo carbon_get_post_meta($pageID, 'testimonials_subtitle') ?></p>
                </div>
                <div class="cards">
					<?php $testimonials_list = carbon_get_post_meta($pageID, 'testimonials_slider');
					foreach ($testimonials_list as $item) :?>
                        <div class="card_item">
                            <div class="photo"
                                 style='background-image: url("<?php echo $item['testimonials_card_icon'] ?>")'></div>
                            <div class="content">
                                <h3 class="title"><?php echo $item['testimonials_card_name'] ?></h3>
                                <h6 class="subtitle"><?php echo $item['testimonials_card_job'] ?></h6>
                                <div class="stars">
									<?php $stars = $item['testimonials_card_stars'];
									$div_stars   = ($stars * 2) % 2;
									if ($div_stars) {
										$stars -= 0.5;
									} ?>
									<?php for ($i = 0; $i < $stars; ++ $i): ?>
                                        <div class="star"></div>
									<?php endfor; ?>
									<?php if ($div_stars) : ?>
                                        <div class="half_star"></div>
									<?php endif; ?>
									<?php for ($i = $stars + $div_stars; $i < 5; ++ $i): ?>
                                        <div class="empty_star"></div>
									<?php endfor; ?>
                                </div>
                                <p class="description"><?php echo $item['testimonials_card_description'] ?></p>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about_inner">
                <div class="about_title">
                    <h2 class="title"><?php echo carbon_get_post_meta($pageID, 'about_title') ?></h2>
                    <p class="subtitle"><?php echo carbon_get_post_meta($pageID, 'about_subtitle') ?></p>
                </div>

                <div class="content">
                    <video class="about_video" controls="controls" preload="auto" onloadstart="this.volume=0.2">
                        <source src="<?php $gallery = carbon_get_post_meta($pageID, 'about_video');
						foreach ($gallery as $item) {
							echo wp_get_attachment_url($item);
							break;
						} ?>">
                    </video>
                    <div class="description">
                        <h3 class="title"><?php echo carbon_get_post_meta($pageID, 'about_video_description_title') ?></h3>
                        <p class="subtitle"><?php echo carbon_get_post_meta($pageID, 'about_video_description_subtitle') ?></p>
                        <div class="cards">
							<?php $about_card_list = carbon_get_post_meta($pageID, 'about_card_list');
							foreach ($about_card_list as $item) :?>
                                <div class="card_item">
                                    <div class="card_icon"><img alt="" src="<?php echo $item['about_card_icon'] ?>">
                                    </div>
                                    <div class="card_content">
                                        <h5 class="card_title"><?php echo $item['about_card_title'] ?></h5>
                                        <h6 class="card_subtitle"><?php echo $item['about_card_subtitle'] ?></h6>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="pricing_inner">
                <div class="pricing_header">
                    <h2 class="title"><?php echo carbon_get_post_meta($pageID, 'pricing_title') ?></h2>
                    <p class="subtitle"><?php echo carbon_get_post_meta($pageID, 'pricing_subtitle') ?></p>
                </div>
                <div class="cards">
					<?php foreach (carbon_get_post_meta($pageID, 'pricing_card_list') as $item) : ?>
                        <div class="card_item">
                            <div class="card_container">
                                <h3 class="title"><?php echo $item['pricing_card_title'] ?></h3>
                                <h5 class="subtitle"><?php echo $item['pricing_card_subtitle'] ?></h5>
                                <div class="card_price">
                                    <h2 class="price"><?php echo $item['pricing_card_price'] ?></h2>
                                    <h5 class="per_time"><?php echo $item['pricing_card_period'] ?></h5>
                                </div>
                                <button class="btn_text try_btn">Try for free</button>
                                <div class="card_advantages">
									<?php
									sort($item['pricing_card_adv']);
									foreach ($item['pricing_card_adv'] as $card_adv) : ?>
                                        <div class="adv_item">
                                            <div class="round <?php echo $card_adv['is_adv'] ?>"></div>
                                            <h6 class="ad_txt"><?php echo $card_adv['pricing_card_adv_text'] ?></h6>
                                        </div>
									<?php endforeach; ?>
                                </div>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact_inner">
                <div class="contact_head">
                    <h2 class="title"><?php echo carbon_get_post_meta($pageID, 'contact_title') ?></h2>
                    <p class="subtitle"><?php echo carbon_get_post_meta($pageID, 'contact_subtitle') ?></p>
                </div>
                <div class="cards">
					<?php foreach (carbon_get_post_meta($pageID, 'contact_card_list') as $item): ?>
                        <div class="card_item">
                            <div class="icon"><img alt="" src="<?php echo $item['contact_card_icon'] ?>"></div>
                            <div class="mail_links">
								<?php foreach ($item['contact_mails'] as $mail) : ?>
                                    <h6 class="mail"><?php echo $mail['contact_mail'] ?></h6>
								<?php endforeach; ?>
                            </div>
                            <h5 class="get_sup">Get Support</h5>
                            <button class="btn_text submit_request_btn">Submit Request</button>
                        </div>
					<?php endforeach; ?>
                
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
<section class="footer">
    <div class="container">
        <div class="footer_inner">
            <div class="footer_head">
                <div class="logo">
                    <h3 class="logo_txt">Kleinvest</h3>
                </div>
                <div class="social_media">
					<?php foreach (carbon_get_theme_option('social_media_list') as $item): ?>
                        <a class="link" href="<?php echo $item['social_media_link'] ?>">
                            <img alt="" src="<?php echo $item['about_card_icon'] ?>">
                        </a>
					<?php endforeach; ?>
                </div>
            </div>
            <div class="footer_content">
                <div class="link_list">
					<?php foreach (carbon_get_theme_option('link_list') as $item): ?>
                        <div class="link_item">
                            <h5 class="link_title"><?php echo $item['link_item_title'] ?></h5>
							<?php foreach ($item['link_item_list'] as $link_item): ?>
                                <a class="link" href="<?php echo $link_item['link'] ?>">
									<?php echo $link_item['link_text'] ?></a>
							<?php endforeach; ?>
                        </div>
					<?php endforeach; ?>

                    <div class="request">
                        <h5 class="request_title">Get In Touch</h5>
                        <form action="#" class="subscribe_form">
                            <input placeholder="Your Email" type="text">
                            <button class="btn_text submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
</body>
</html>

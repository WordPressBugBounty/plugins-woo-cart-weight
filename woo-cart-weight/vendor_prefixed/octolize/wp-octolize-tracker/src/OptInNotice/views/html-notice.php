<?php

namespace WCWeightVendor;

/**
 * @var string $username
 * @var string $terms_url
 * @var string $plugin_slug
 */
?>
		<strong><?php 
echo \esc_html(\__('Help us improve Octolize plugins\' experience', 'woo-cart-weight'));
?></strong><br/>
        <?php 
echo \wp_kses_post(\sprintf(\__('Hi %1$s, with your helping hand we can build effective solutions, launch the new features and shape better plugins experience. By agreeing to anonymously share non-sensitive %2$susage data%3$s of our plugins, you will help us develop them in the right direction. No personal data is tracked or stored and you can opt-out any time. Will you give the thumbs up to our efforts?', 'woo-cart-weight'), $username, '<a href="' . \esc_url($terms_url) . '" target="_blank">', '</a>'));
?><br/>
    </p>
    <p>
    <button id="wpdesk_tracker_allow_button_notice-<?php 
echo \esc_attr($plugin_slug);
?>" class="button button-primary"><?php 
\esc_html_e('Allow', 'woo-cart-weight');
?></button>
<?php 

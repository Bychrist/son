<?php
//about theme info
add_action( 'admin_menu', 'lz_one_page_gettingstarted' );
function lz_one_page_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'lz-one-page'), esc_html__('About Theme', 'lz-one-page'), 'edit_theme_options', 'lz_one_page_guide', 'lz_one_page_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lz_one_page_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'lz_one_page_admin_theme_style');

//guidline for about theme
function lz_one_page_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'lz-one-page' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to LZ One Page WordPress Theme', 'lz-one-page' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'lz-one-page' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'lz-one-page' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'lz-one-page' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'lz-one-page' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'lz-one-page' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'lz-one-page' ); ?> <a href="<?php echo esc_url( LZ_ONE_PAGE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'lz-one-page' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'LZ One Page is a stunning, dynamic, performance focused and flexible one page WordPress theme for landing pages, personal websites, blogs, small businesses and online shops. It can take the skin of any type of website whether it is for a local shop or a corporate company, a travel agency or a real estate agency. It is extremely lightweight and hence loads really fast. It is a responsive theme that looks gorgeous on any mobile, tablet or desktop. This one page WordPress theme is multi-browser compatible, social media integrated and multilingual; it supports RTL writing so you can build it for different demographics. It has a clean and bug-free design to comply with the WordPress standards of coding. You get many options to style the website according to your needs like you can choose between boxed, full-width and full screen layout; place navigation menu at the centre, left or right of header and add different widgets in the footer area. It is optimized for search engines so your website will get higher rank in Google search. This one page WordPress theme has smart ways to include call to action (CTA) buttons. Various custom post types are included in it like gallery, testimonial section, subscription form, latest news and others, each of which can be used as per your needs. ', 'lz-one-page')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free LZ One Page Theme', 'lz-one-page' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'lz-one-page'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( LZ_ONE_PAGE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lz-one-page'); ?></a>
			<a href="<?php echo esc_url( LZ_ONE_PAGE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'lz-one-page'); ?></a>
			<a href="<?php echo esc_url( LZ_ONE_PAGE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'lz-one-page'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/lz-one-page2.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'lz-one-page'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'lz-one-page'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'lz-one-page'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>
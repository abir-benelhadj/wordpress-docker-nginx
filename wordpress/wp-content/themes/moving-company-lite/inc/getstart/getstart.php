<?php
//about theme info
add_action( 'admin_menu', 'moving_company_lite_gettingstarted' );
function moving_company_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About Moving Company Lite', 'moving-company-lite'), esc_html__('About Moving Company Lite', 'moving-company-lite'), 'edit_theme_options', 'moving_company_lite_guide', 'moving_company_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function moving_company_lite_admin_theme_style() {
   wp_enqueue_style('moving-company-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('moving-company-lite-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'moving_company_lite_admin_theme_style');

//guidline for about theme
function moving_company_lite_mostrar_guide() { 
	//custom function about theme customizer
	$moving_company_lite_return = add_query_arg( array()) ;
	$moving_company_lite_theme = wp_get_theme( 'moving-company-lite' );
?>

<div class="wrap getting-started">
		<div class="getting-started__header">
	    	<div>
                <h2 class="tgmpa-notice-warning"></h2>
            </div>
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Moving Company Lite ', 'moving-company-lite' ); ?></h2>
						
						<p class="version"><?php esc_html_e( 'Version', 'moving-company-lite' ); ?>: <?php echo esc_html($moving_company_lite_theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'moving-company-lite' ); ?>	
						</span>
    					
						<div class="powered-by">
							<p ><strong><?php esc_html_e( 'All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.', 'moving-company-lite' ); ?></strong></p>
													
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( MOVING_COMPANY_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'moving-company-lite'); ?></a>
						<a href="<?php echo esc_url( MOVING_COMPANY_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'moving-company-lite'); ?></a>
						<a href="<?php echo esc_url( MOVING_COMPANY_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'moving-company-lite'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/getstart/images/responsive.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1) Setup Moving Company Lite Theme', 'moving-company-lite' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'Moving Company Lite is an excellent WordPress theme with the main focus on the logistics related business. As a result, it is good for the movers and packers related businesses like warehouse packers, shifters, road transport, ship, courier, relocation, storage, Aircraft and drones, truck shipping, vehicles, trucks, vans, motorcycles, Pipelines, Chauffeur services , Railways, heavy equipment transport, Inland waterways, general logistics, air cargo, packaging company, packing services, self-storage services, warehouse, warehousing, trailer, warehouses, home movers, flat mover, house move, contractor, localization, Office Moving, logistics booking,Logistics, Relocation, Transport, Moving, Delivery, track shipment fleet, Routes, Road Freight, Sea Freight, construction, architecture firm, corporate, cargo moving, home packing, local movers, long distance moving, air transport, transportation companies, goods carrier and tracking services, websites related to the logistics companies. Armed with the exclusive features like the Bootstrap Framework, CTA, Custom Background, Post Formats, retina ready, right sidebar, footer widgets, Grid Layout, social media icons translation ready, multipurpose, responsive, stunning, secure plus clean code, customization options, personalization options and much more, it is good for the career services as well as the logistic companies and also for the companies that are related to the shipping and trucking business. With this theme of premium level, you can craft an exclusive website related to the warehouse as well as freight services. Moving Company Lite is a theme of premium category solely designed by the experts in this area and has high applicability for the logistic services as well as the transportation companies. It is interactive, animated and with shortcodes as a result making it a good option to craft the websites related to the delivery and shipping companies, cargo hubs, freight service providers, ware house as well as carrier services. It is also good for shipment services.', 'moving-company-lite' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','moving-company-lite'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','moving-company-lite'); ?></a> <?php esc_html_e( 'your website.','moving-company-lite'); ?> </li>
							<li><?php esc_html_e( 'Moving Company Lite','moving-company-lite'); ?> <a target="_blank" href="<?php echo esc_url( MOVING_COMPANY_LITE_FREE_THEME_DOC ); ?>"><?php esc_html_e( 'Documentation','moving-company-lite'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2) Premium Theme Information.','moving-company-lite'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/getstart/images/responsive1.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','moving-company-lite'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'Moving company WordPress theme is a premium category WordPress theme available in the online international market and is full of splendid features making it highly demandable for the businesses related to the cargo and logistics. It is responsive, elegant, clean and multipurpose making it one of the finest choices for the movers and packers and also for the carrier services. Moving company WordPress theme comes with the fast page load time making it an exclusive one for the shipping, trucking and the freight services. This theme is SEO and mobile friendly having the optimised codes making it a fine choice to make the website related to the warehouse or any kind of business related to the logistics as well as transportation. It is a stunning with translation features making it a good one for the freight service provider websites. Moving company WordPress theme is totally professional.', 'moving-company-lite' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','moving-company-lite'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'One Click Demo Importer','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Global Color Option','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Responsive design','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Favicon, logo, title, and tagline customization','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Advanced Color Options and Color Pallets','moving-company-lite'); ?></li>
										<li><?php esc_html_e( '100+ font family options','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Simple Menu Option','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'SEO Friendly','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Pagination Option','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Compatible with different WordPress famous plugins like contact form 7 and Woocommerce','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on all sections','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Well Sanitized as per WordPress standards.','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Footer customization options','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with font awesome icon','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Allow to set site title, tagline, logo','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Sticky post & comment threads','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Section Reordering','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Customizable home page','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Full-width template','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Footer widgets & editor style','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Social Media Feature','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Slider with an unlimited number of slides','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Our Services Section','moving-company-lite'); ?></li>								
										<li><?php esc_html_e( 'Branding Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Testimonial Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Our Team Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Counter Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Our Project Section','moving-company-lite'); ?></li>								
										<li><?php esc_html_e( 'Moving Tips Section','moving-company-lite'); ?></li>	
										<li><?php esc_html_e( 'How Do We Work','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'FAQ Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Contact Form Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Instagram Feed','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Newsletter Section','moving-company-lite'); ?></li>
										<li><?php esc_html_e( 'Blog post section','moving-company-lite'); ?></li>								
										<li><?php esc_html_e( 'Contact page template','moving-company-lite'); ?></li>	
										<li><?php esc_html_e( 'Shortcodes for the Custom Posttype','moving-company-lite'); ?></li>			
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','moving-company-lite'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( MOVING_COMPANY_LITE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','moving-company-lite'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( MOVING_COMPANY_LITE_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','moving-company-lite'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','moving-company-lite'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','moving-company-lite'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','moving-company-lite'); ?></a> <?php esc_html_e( 'your website.','moving-company-lite'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','moving-company-lite'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( MOVING_COMPANY_LITE_FREE_THEME_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','moving-company-lite'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( MOVING_COMPANY_LITE_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','moving-company-lite'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','moving-company-lite'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( MOVING_COMPANY_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'moving-company-lite'); ?></a>
					</ol>
				</div>
			</div>
		</div>
</div>

<?php } ?>
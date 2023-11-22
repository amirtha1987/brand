<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://cyberchimps.com/
 * @since      1.0.0
 *
 * @package    Responsive Ready Sites
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="responsive-ready-site-preview"></div>
<div id="responsive-ready-sites-import-options"></div>
<div id="responsive-ready-sites-admin-page">
	<div class="responsive-sites-header">
		<span class="ready-site-list-title"><?php esc_html_e( 'Responsive Starter Templates', 'responsive-addons' ); ?></span>
	</div>
	<?php
					
					$business_subcategories = array(
						array(
							'name'=> 'Advertising & Marketing',
							'slug'=> 'advertising-marketing',
						),
						array(
							'name'=> 'Real Estate & Construction',
							'slug'=> 'real-estate-construction',
						),
						array(
							'name'=> 'Cars & Automotive',
							'slug'=> 'cars-automotive',
						),
						array(
							'name'=> 'Consulting & Coaching',
							'slug'=> 'consulting-coaching',
						),
						array(
							'name'=> 'Finance & Law',
							'slug'=> 'finance-law',
						),
						array(
							'name'=> 'Farming & Gardening',
							'slug'=> 'farming-gardening',
						),
						array(
							'name'=> 'Transport',
							'slug'=> 'transport',
						),
						array(
							'name'=> 'Pet & Animal',
							'slug'=> 'pet-animal',
						),
						array(
							'name'=> 'Architecture & Interior',
							'slug'=> 'architecture-interior',
						),
						array(
							'name'=> 'Technology & Apps',
							'slug'=> 'technology-apps',
						),
					);
					$health_subcategories = array(
						array(
							'name'=> 'Doctor',
							'slug'=> 'doctor',
						),
						array(
							'name'=> 'Hospital',
							'slug'=> 'hospital',
						),
						array(
							'name'=> 'Dentist & Dental',
							'slug'=> 'dentist-dental',
						),
						array(
							'name'=> 'Medical & Clinic',
							'slug'=> 'medical-clinic',
						),
						array(
							'name'=> 'Therapist & Psychologist',
							'slug'=> 'therapist-psychologist',
						),
						array(
							'name'=> 'Gym & Fitness',
							'slug'=> 'gym-fitness',
						),
						array(
							'name'=> 'Yoga',
							'slug'=> 'yoga',
						),
					);
					$fashion_subcategories = array(
						array(
							'name'=> 'Fashion',
							'slug'=> 'fashion',
						),
						array(
							'name'=> 'Shoes & Footwear',
							'slug'=> 'shoes-footwear',
						),
						array(
							'name'=> 'Salon & Spa',
							'slug'=> 'salon-spa',
						),
						array(
							'name'=> 'Makeup & Cosmetics',
							'slug'=> 'makeup-cosmetics',
						),
					);
					$restaurant_subcategories = array(
						array(
							'name'=> 'Food',
							'slug'=> 'food',
						),
						array(
							'name'=> 'Cafe & Bakery',
							'slug'=> 'cafe-bakery',
						),
						array(
							'name'=> 'Bar & Club',
							'slug'=> 'bar-club',
						),
						array(
							'name'=> 'Restaurant',
							'slug'=> 'restaurant',
						),
						array(
							'name'=> 'Catering & Chef',
							'slug'=> 'catering-chef',
						),
					);
					$travel_subcategories = array(
						array(
							'name'=> 'Apartments & Hostels',
							'slug'=> 'apartments-hostels',
						),
						array(
							'name'=> "Hotels & BB's",
							'slug'=> 'hotels-b&bs',
						),
					);
					$services_subcategories = array(
						array(
							'name'=> 'Accounting',
							'slug'=> 'accounting',
						),
						array(
							'name'=> "Insurance",
							'slug'=> 'insurance',
						),
						array(
							'name'=> 'Roofing',
							'slug'=> 'roofing',
						),
						array(
							'name'=> "Cleaning",
							'slug'=> 'cleaning',
						),
						array(
							'name'=> 'Electrician',
							'slug'=> 'electrician',
						),
						array(
							'name'=> "Plumbing",
							'slug'=> 'plumbing',
						),
						array(
							'name'=> 'Courier',
							'slug'=> 'courier',
						),
						array(
							'name'=> "Author & Writer",
							'slug'=> 'author-writer',
						),
						array(
							'name'=> 'Landscaping',
							'slug'=> 'landscaping',
						),
						array(
							'name'=> "Hair & Stylist",
							'slug'=> 'hair-stylist',
						),
					);
					$creative_subcategories = array(
						array(
							'name'=> 'Photography',
							'slug'=> 'photography',
						),
						array(
							'name'=> "Artist",
							'slug'=> 'artist',
						),
						array(
							'name'=> "Musician & Singer",
							'slug'=> 'musician-singer',
						),
						array(
							'name'=> "Travel",
							'slug'=> 'travel-documentary',
						),
						array(
							'name'=> "Art & Illustration",
							'slug'=> 'art-illustration',
						),
						array(
							'name'=> 'Designing',
							'slug'=> 'designing',
						),
						array(
							'name'=> 'Graphic & Web',
							'slug'=> 'graphic-web',
						),
						array(
							'name'=> 'Podcast',
							'slug'=> 'podcast',
						),
						array(
							'name'=> 'Music & Industry',
							'slug'=> 'music-industry',
						),
						array(
							'name'=> 'Film & TV',
							'slug'=> 'film-tv',
						),

					);
					$community_subcategories = array(
						array(
							'name'=> 'Church',
							'slug'=> 'church',
						),
						array(
							'name'=> "Charity & NonProfit",
							'slug'=> 'charity-nonprofit',
						),
						array(
							'name'=> 'Schools & Universities',
							'slug'=> 'schools-universities',
						),
						array(
							'name'=> 'Preschool & Kindergarten',
							'slug'=> 'preschool-kindergarten',
						),
						array(
							'name'=> 'Online Education',
							'slug'=> 'online-education',
						),
						array(
							'name'=> 'Wedding',
							'slug'=> 'wedding',
						),
						array(
							'name'=> 'Holidays & Celebrations',
							'slug'=> 'holidays-celebrations',
						),
						array(
							'name'=> 'Conferences & Meetups',
							'slug'=> 'conferences-meetups',
						),
					);
					$ecommerce_subcategories = array(
						array(
							'name'=> 'Book Store',
							'slug'=> 'book-store',
						),
						array(
							'name'=> "Beauty & Wellness",
							'slug'=> 'beauty-wellness',
						),
						array(
							'name'=> "Fashion & Clothing Store",
							'slug'=> 'fashion-clothing-store',
						),
						array(
							'name'=> "Home & Furniture",
							'slug'=> 'home-furniture',
						),
						array(
							'name'=> "Electronics",
							'slug'=> 'electronics',
						),
						array(
							'name'=> "Jewellery & Accessories",
							'slug'=> 'jewellery-accessories',
						),
						array(
							'name'=> "Sports & Outdoors",
							'slug'=> 'sports-outdoors',
						),
						array(
							'name'=> "Membership",
							'slug'=> 'membership',
						),
						array(
							'name'=> "Online Course & LMS",
							'slug'=> 'online-course-lms',
						),
						array(
							'name'=> "Food Ordering",
							'slug'=> 'food-ordering',
						),
					);
					$blog_subcategories = array(
						array(
							'name'=> 'Personal & Blog',
							'slug'=> 'personal-blog',
						),
						array(
							'name'=> "News",
							'slug'=> 'news',
						),
						array(
							'name'=> "Landing Page",
							'slug'=> 'landing-page',
						),
						array(
							'name'=> "Magazine",
							'slug'=> 'magazine',
						),
						array(
							'name'=> "Portfolios",
							'slug'=> 'portfolios',
						),
						array(
							'name'=> "Resumes & CV's",
							'slug'=> 'resumes-cvs',
						),
						array(
							'name'=> "Multipurpose",
							'slug'=> 'multipurpose',
						),
						array(
							'name'=> "One Page",
							'slug'=> 'one-page',
						),
					);
					$expand_more_svg = '
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<mask id="mask0_5372_12373" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
							<rect width="20" height="20" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#mask0_5372_12373)">
							<path d="M10.0004 12.218C9.90534 12.218 9.81319 12.2019 9.72398 12.1699C9.63477 12.1378 9.55118 12.0828 9.47319 12.0048L5.71517 8.24682C5.59445 8.1261 5.53623 7.98187 5.5405 7.81413C5.54477 7.64639 5.60727 7.50217 5.728 7.38144C5.84872 7.26072 5.99509 7.20036 6.16709 7.20036C6.33909 7.20036 6.48545 7.26072 6.60617 7.38144L10.0004 10.7757L13.4075 7.36863C13.5282 7.24791 13.6724 7.18968 13.8402 7.19394C14.0079 7.19822 14.1521 7.26072 14.2728 7.38144C14.3936 7.50217 14.4539 7.64853 14.4539 7.82055C14.4539 7.99255 14.3936 8.13891 14.2728 8.25963L10.5276 12.0048C10.4497 12.0828 10.3674 12.1378 10.2809 12.1699C10.1943 12.2019 10.1008 12.218 10.0004 12.218Z" fill="#334155"/>
							</g>
						</svg>';
						?>
						<div id="responsive-sites__category-filter" class="dropdown-check-list" tabindex="100">
							<span class="responsive-sites__category-filter-anchor" data-slug="" style="display: none;"><?php esc_html_e( 'All', 'responsive-addons' ); ?></span>
							<div class="rst-business-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="business">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Business", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Business", "responsive-addons" ) ?></span>
									<?php
									foreach ( $business_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-health-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="health-wellness">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Health", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Health", "responsive-addons" ) ?></span>
									<?php
									foreach ( $health_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-health-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="fashion-style">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Fashion", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Fashion", "responsive-addons" ) ?></span>
									<?php
									foreach ( $fashion_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-restaurant-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="restaurants-food">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Restaurants", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Restaurants", "responsive-addons" ) ?></span>
									<?php
									foreach ( $restaurant_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-travel-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="travel-tourism">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Travel", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Travel", "responsive-addons" ) ?></span>
									<?php
									foreach ( $travel_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-services-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="services">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Services", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Services", "responsive-addons" ) ?></span>
									<?php
									foreach ( $services_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-creative-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="creative">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Creative", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Creative", "responsive-addons" ) ?></span>
									<?php
									foreach ( $creative_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-community-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="community">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Community", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Community", "responsive-addons" ) ?></span>
									<?php
									foreach ( $community_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-ecommerce-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="ecommerce">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Ecommerce", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Ecommerce", "responsive-addons" ) ?></span>
									<?php
									foreach ( $ecommerce_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
							<div class="rst-blog-category-group rst-menu-parent-category-group">
								<div class="rst-menu-parent-category responsive-sites_category" data-slug="blog">
									<span class="rst-menu-parent-category-title">
										<span><?php esc_html_e( "Blog", "responsive-addons" ) ?></span><?php echo $expand_more_svg; ?>
									</span>
								</div>
								<div class="rst-menu-child-category-group">
									<span class="rst-menu-category-section-title"><?php esc_html_e( "Blog", "responsive-addons" ) ?></span>
									<?php
									foreach ( $blog_subcategories as $key => $value ) {
										?>
											<div class="rst-menu-child-category responsive-sites_category" data-slug="<?php echo esc_attr( $value['slug'] ); ?>"><span><?php echo esc_html( $value['name'] ); ?></span></div>
										<?php
									}
									?>
								</div>
							</div>
						</div>
	<div class="theme-browser rendered">
		<div id="responsive-sites" class="themes wp-clearfix"></div>
		<script type="text/javascript">
			jQuery('.responsive-ready-sites-quick-links-toggler-button').on('click', function(e) {
				jQuery('.responsive-ready-sites-quick-links').toggleClass('show');
			});
		</script>
	</div>
</div>

<?php
/**
 * TMPL - List
 */
?>

<script type="text/template" id="tmpl-responsive-sites-list">
	<# for ( key in data ) { #>
		<div class="theme inactive ra-site-single {{ data[ key ].status }} {{ data[ key ].class }}" tabindex="0" aria-describedby="responsive-theme-action responsive-theme-name"
			data-demo-id="{{{ data[ key ].id }}}"
			data-demo-url="{{{ data[ key ]['site_url'] }}}"
			data-demo-slug="{{{  data[ key ].slug }}}"
			data-demo-name="{{{  data[ key ].title.rendered }}}"
			data-active-site="{{{  data.active_site }}}"
			data-demo-type="{{{ data[ key ].demo_type }}}"
			data-wpforms-path="{{{ data[ key ].wpforms_path }}}"
			data-allow-pages="{{{ data[ key ].allow_pages }}}"
			data-check_plugins_installed="{{{ data[ key ].check_plugins_installed }}}"
			data-screenshot="{{{ data[ key ]['featured_image_url'] }}}"
			data-required-plugins="{{ JSON.stringify(data[ key ]['required_plugins']) }}"
			data-pages="{{ JSON.stringify(data[ key ]['pages'] )}}"
			data-required-pro-plugins="{{ JSON.stringify(data[ key ]['required_pro_plugins']) }}"
			data-favorite-status="{{{ data[ key ].favorite_status }}}">
			<input type="hidden" class="site_options_data" value="{{ JSON.stringify(data[ key ][ 'site_options_data' ]) }}">
		<div class="inner">
					<span class="site-preview" data-href="{{ data[ key ]['responsive-site-url'] }}?TB_iframe=true&width=600&height=550" data-title="data title">
						<div class="theme-screenshot" style="background-image: url('{{ data[ key ]['featured_image_url'] }}');"></div>
					</span>
			<span class="demo-type {{{ data[ key ].demo_type }}}">{{{ data[ key ].demo_type }}}</span>
			<# if (data[ key ].slug === data.active_site ) { #>
				<span class="current_active_site"><?php esc_html_e( 'Currently Active', 'responsive-addons' ); ?></span>
			<# } #>
			<div class="theme-id-container">
				<h3 class="theme-name" id="responsive-theme-name">{{{ data[ key ].title.rendered }}}</h3>
					<div class="responsive-single-site-favorite-div">
						<div id="rst-favorite-btn" class="rst-favorite-btn {{{ data[ key ].favorite_status }}}" data="false">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
								<path d="M11.3263 20.4948L11.3256 20.4942C8.63349 18.053 6.43917 16.0597 4.91203 14.1914C3.39039 12.3298 2.5835 10.6533 2.5835 8.85417C2.5835 5.91215 4.87988 3.625 7.81266 3.625C9.47401 3.625 11.0768 4.40098 12.1207 5.61731L12.5002 6.05938L12.8796 5.61731C13.9235 4.40098 15.5263 3.625 17.1877 3.625C20.1205 3.625 22.4168 5.91215 22.4168 8.85417C22.4168 10.6533 21.6099 12.3298 20.0883 14.1914C18.5612 16.0597 16.3668 18.053 13.6747 20.4942L13.674 20.4948L12.5002 21.5634L11.3263 20.4948Z" fill="white" stroke="#EF4444"/>
								</svg>
						</div>
					</div>
			</div>
			<div class="guided-overlay step-three" id="step-three">
				<p class="guide-text">Click the "Preview" button to view the website template and click import.</p>
				<div class="guided-overlay-buttons">
					<button id="step-three-previous">Previous</button>
					<button id="step-three-finish" class="finish-tour">Finish Tour</button>
				</div>
			</div>
		</div>
	</div>
	<# } #>
</script>
<?php
/** Site suggestion block */
?>
<script type="text/template" id="tmpl-responsive-sites-suggestions">
	<div class="responsive-sites-suggestions">
		<div class="inner">
			<h3><?php esc_html_e( 'Sorry No Results Found.', 'responsive-addons' ); ?></h3>
			<div class="content">
				<div class="description">
					<p>
						<?php
						__( 'Can\'t find a Responsive Starter Template that suits your purpose ?' );
						?>
						<br><a target="_blank" href="mailto:support@cyberchimps.com?Subject=New%20Site%20Suggestion">
						<?php
						__( 'Suggest A Site' )
						?>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</script>
<?php
/** Single Demo Preview */
?>

<script type="text/template" id="tmpl-responsive-ready-site-preview">
	<div class="responsive-ready-site-preview theme-install-overlay wp-full-overlay collapsed"
		data-demo-id="{{{data.id}}}"
		data-demo-url="{{{data.demo_url}}}"
		data-demo-api="{{{data.demo_api}}}"
		data-demo-name="{{{data.name}}}"
		data-active-site="{{{data.active_site}}}"
		data-demo-type="{{{data.demo_type}}}"
		data-wpforms-path="{{{data.wpforms_path}}}"
		data-check_plugins_installed="{{{data.check_plugins_installed}}}"
		data-demo-slug="{{{data.slug}}}"
		data-screenshot="{{{data.screenshot}}}"
		data-required-plugins="{{data.required_plugins}}"
		data-required-pro-plugins="{{data.required_pro_plugins}}"
		data-pages="{{data.pages}}">
		<input type="hidden" class="responsive-site-options" value="{{data.site_options_data}}" >
		<div class="wp-full-overlay-header">
			<div class="responsive-single-demo-preview">
				<div class="responsive-sites-demo-details">
						<div class="responsive-sites-demo-preview-logo-wrap">
							<img src="<?php echo esc_url( RESPONSIVE_ADDONS_URI . 'admin/images/svgs/responsive-starter-templates-thumbnail.svg' ); ?>">
						</div>
					<span class="responsive-site-demo-name">{{data.name}}</span>
					<span class="responsive-site-demo-type responsive-site-demo-type-{{{data.demo_type}}}">{{data.demo_type}}</span>
				</div>
				<div class="responsive-addons-import-btns">
					<button class="close-full-overlay responsive-addons"><span class="close-full-overlay-text"><?php esc_html_e( 'Go Back', 'responsive-addons' ); ?></span></button>
					<# if ( data.demo_type == "free" || ( data.is_responsive_addons_pro_installed && data.is_responsive_addons_pro_license_active ) ) { #>
	
					<a class="button button-primary responsive-addons responsive-demo-import-options-{{{data.demo_type}}}" href="#"><?php esc_html_e( 'Import Site', 'responsive-addons' ); ?></a>
	
						<# if ( data.allow_pages ) { #>
	
						<a class="button button-primary responsive-addons responsive-page-import-options-{{{data.demo_type}}}" href="#"><?php esc_html_e( 'Import Template', 'responsive-addons' ); ?></a>
	
						<# } #>
					<# } else { #>
	
					<a class="button button-primary responsive-addons responsive-buy-pro" href="https://cyberchimps.com/responsive-go-pro/?utm_source=free-to-pro&utm_medium=responsive-add-ons&utm_campaign=responsive-pro&utm_content=preview-ready-site" target="_blank"><?php esc_html_e( 'Buy Responsive Pro', 'responsive-addons' ); ?></a>
	
					<# } #>
				</div>
			</div>
		</div>
		<div class="wp-full-overlay-main">
			<iframe src="{{{data.demo_url}}}" title="<?php esc_attr_e( 'Preview', 'responsive-addons' ); ?>"></iframe>
		</div>
	</div>
</script>

<?php
/** Theme Import Options Page */
?>
<script type="text/template" id="tmpl-responsive-ready-sites-import-options-page">
		<div class="responsive-ready-sites-advanced-options-wrap wp-full-overlay collapsed"
			data-demo-id="{{{data.id}}}"
			data-demo-url="{{{data.demo_url}}}"
			data-demo-api="{{{data.demo_api}}}"
			data-demo-name="{{{data.name}}}"
			data-demo-type="{{{data.demo_type}}}"
			data-demo-slug="{{{data.slug}}}"
			data-screenshot="{{{data.screenshot}}}"
			data-required-plugins="{{data.required_plugins}}"
			data-pages="{{data.pages}}"
			data-required-pro-plugins="{{data.required_pro_plugins}}">
			<input type="hidden" class="responsive-site-options" value="{{data.site_options_data}}" >
			<input type="hidden" class="demo_site_id" value="{{{ data.id }}}">
			<div class="wp-full-overlay-header">
				<div class="responsive-advanced-options-wrap">
					<div class="responsive-sites-demo-details">
							<div class="responsive-sites-demo-preview-logo-wrap">
								<img src="<?php echo esc_url( RESPONSIVE_ADDONS_URI . 'admin/images/svgs/responsive-starter-templates-thumbnail.svg' ); ?>">
							</div>
					</div>
					<div class="responsive-addons-import-btns">
						<a href="<?php echo esc_url(admin_url().'admin.php?page=responsive-add-ons'); ?>" class="rst-exit-to-dashboard"><img src="<?php echo esc_url( RESPONSIVE_ADDONS_URI . 'admin/images/svgs/exit-to-dashboard.svg' ); ?>"></a>
					</div>
				</div>
			</div>
			<div class="wp-full-overlay-main">
				<div class="sites-import-process-errors" style="display: none">
					<div class="import-process-error">
						<div class="current-importing-status-error-title"></div>
					</div>
				</div>

				<div class="site-import-options">
					<div class="responsive-ready-sites-advanced-options">
						<h2>Importing {{data.name}} Site</h2>
						<# if ( data.slug === data.active_site ) { #>
							<p><?php esc_html_e( 'This will delete previously imported site', 'responsive-addons' ); ?></p>
						<# } #>
						<ul class="responsive-ready-site-contents">
							<?php
							$current_theme = wp_get_theme();
							if ( ! ( 'Responsive' === $current_theme->get( 'Name' ) ) || ( is_child_theme() && 'Responsive' === $current_theme->parent()->get( 'Name' ) ) ) {
								?>
							<li class="responsive-ready-sites-install-responsive">
								<label>
									<input type="checkbox" name="reset" checked="checked" class="checkbox" id="install_responsive_checkbox">
									<strong><?php esc_html_e( 'Install Responsive Theme', 'responsive-addons' ); ?></strong>
								</label>
								<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-install-responsive" data-tip-id="responsive-ready-sites-tooltip-install-responsive"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
								<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-install-responsive" style="display: none;">
									<p><?php esc_html_e( 'Install and Activates the Responsive Theme.', 'responsive-addons' ); ?></p>
								</div>
							</li>
								<?php
							}
							?>
							<li class="responsive-ready-sites-import-plugins">
								<input type="checkbox" name="plugins" checked="checked" class="disabled checkbox" readonly>
								<strong><?php esc_html_e( 'Install Required Plugins', 'responsive-addons' ); ?></strong>
								<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-plugins-settings" data-tip-id="responsive-ready-sites-tooltip-plugins-settings"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
								<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-plugins-settings" style="display: none;">
									<ul class="required-plugins-list"><span class="spinner is-active"></span></ul>
									<# if ( data.pro_plugins_flag ) { #>
										<div class="responsive-ready-sites-third-party-plugins-warning"><?php __( 'This starter template requires third party Premium Plugins. you\'ll need to purchase, install and activate. Ignore this if installed already.', 'responsive-addons' ); ?></div>
										<ul class="required-third-party-plugins-list"><span class="is-active"></span></ul>
									<# } #>
								</div>
							</li>
							<li class="responsive-ready-sites-reset-data">
								<label>
									<input type="checkbox" name="reset" checked="checked" class="checkbox">
									<strong><?php esc_html_e( 'Delete Previous Import', 'responsive-addons' ); ?></strong>
								</label>
								<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-reset-data" data-tip-id="responsive-ready-sites-tooltip-reset-data"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
								<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-reset-data" style="display: none;">
									<p><?php esc_html_e( 'Deletes previous import including customizer settings and content. Plugins are not deleted.', 'responsive-addons' ); ?></p>
								</div>
							</li>
							<li class="responsive-ready-sites-import-xml">
								<input type="checkbox" name="content" checked="checked" class="disabled checkbox" readonly>
								<strong><?php esc_html_e( 'Import Content', 'responsive-addons' ); ?></strong>
								<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-site-content" data-tip-id="responsive-ready-sites-tooltip-site-content"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
								<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-site-content" style="display: none;">
									<p><?php esc_html_e( 'Imports sample pages, posts, images and menus. Depending on your internet speed this may take 2-10 minutes.', 'responsive-addons' ); ?></p>
								</div>
								<div class="responsive-ready-sites-import-process-wrap" style="display: none;">
									<progress class="responsive-ready-sites-import-process" max="100" value="0"></progress>
								</div>
							</li>
							<li class="responsive-ready-sites-import-customizer">
								<input type="checkbox" name="customizer" checked="checked" class="disabled checkbox" readonly>
								<strong><?php esc_html_e( 'Import Customizer Settings', 'responsive-addons' ); ?></strong>
								<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-customizer-settings" data-tip-id="responsive-ready-sites-tooltip-customizer-settings"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
								<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-customizer-settings" style="display: none;">
									<p><?php esc_html_e( 'Imports sample customizer settings including site identity, typography, colors and other theme options.', 'responsive-addons' ); ?></p>
								</div>
								<div class="responsive-ready-sites-import-customizer-process-wrap" style="display: none;">
									<progress class="responsive-ready-sites-import-customizer-process" max="100" value="0"></progress>
								</div>
							</li>
						</ul>
					</div>
					<div class="responsive-ready-sites-import-button-wrap">
						<button class="button button-hero button-primary responsive-ready-site-import-{{{data.demo_type}}}">
							<?php esc_html_e( 'Import Site', 'responsive-addons' ); ?>
						</button>
					</div>
				</div>
				<div class="result_preview" style="display: none">
				</div>
			</div>
		</div>
</script>

<?php
/** Template Import Options Page */
?>
<script type="text/template" id="tmpl-responsive-ready-sites-import-page-preview-page">
	<div class="responsive-ready-sites-advanced-options-wrap template-preview-page wp-full-overlay collapsed"
		data-demo-api="{{{data.demo_api}}}"
		data-demo-name="{{{data.name}}}"
		data-screenshot="{{{data.screenshot}}}"
		data-demo-type="{{{data.demo_type}}}"
		data-wpforms-path="{{{data.wpforms_path}}}"
		data-required-plugins="{{data.required_plugins}}"
		data-required-pro-plugins="{{data.required_pro_plugins}}">
		<div class="wp-full-overlay-main">
			<div class="sites-import-process-errors" style="display: none">
				<div class="import-process-error">
					<div class="current-importing-status-error-title"></div>
				</div>
			</div>

			<div class="theme-browser rendered">
				<div id="site-pages" class="themes wp-clearfix">
			<div class="single-site-wrap">
				<div class="single-site">
					<div class="single-site-preview-wrap">
						<div class="single-site-preview">
							<img class="theme-screenshot" data-src="" src="{{data.screenshot}}" />
						</div>
					</div>
					<div class="single-site-pages-wrap">
						<div class="responsive-pages-title-wrap">
							<span class="responsive-pages-title"><?php esc_html_e( 'Page Templates', 'responsive-addons' ); ?></span>
						</div>
						<div class="single-site-pages">
							<div id="single-pages">
								<# for (page_id in data.pages)  { #>
								<#
								var required_plugins = [];
								for( id in data.pages[page_id]['free_plugins']) {
									JSON.parse( data.required_plugins ).forEach( function( single_plugin ) {
										if ( data.pages[page_id]['free_plugins'][id] == single_plugin.slug ) {
											required_plugins.push( single_plugin );
										}
									}
								);
								}
								var required_pro_plugins = [];
								for( id in data.pages[page_id]['pro_plugins']) {
									JSON.parse( data.required_pro_plugins ).forEach( function( single_plugin ) {
										if ( data.pages[page_id]['pro_plugins'][id] == single_plugin.slug ) {
											required_pro_plugins.push( single_plugin );
										}
									}
								);
								}
								#>
								<div class="theme responsive-theme site-single" data-page-id="{{data.pages[page_id]['page_id']}}" data-required-pro-plugins="{{ JSON.stringify( required_pro_plugins )}}" data-required-plugins="{{ JSON.stringify( required_plugins )}}" data-includes-wp-forms="{{ data.pages[page_id]['includes_wp_forms'] }}" >
									<div class="inner">
										<#
										var featured_image_class = '';
										var featured_image = data.pages[page_id]['featured_image'] || '';
										if( '' === featured_image ) {
										featured_image = '<?php echo esc_url( RESPONSIVE_ADDONS_DIR . 'inc/assets/images/placeholder.png' ); ?>';
										featured_image_class = ' no-featured-image ';
										}

										var thumbnail_image = data.pages[page_id]['thumbnail-image-url'] || '';
										if( '' === thumbnail_image ) {
										thumbnail_image = featured_image;
										}
										#>
										<span class="site-preview" data-title="{{ data.pages[page_id]['page_title'] }}">
										<div class="theme-screenshot one loading {{ featured_image_class }}" data-src="{{ featured_image }}" data-featured-src="{{ featured_image }}" data-demo-type="{{ data.demo_type }}" style="background-image: url('{{ featured_image }}');"></div>
									</span>
										<div class="theme-id-container">
											<h3 class="theme-name">
												{{{ data.pages[page_id]['page_title'] }}}
											</h3>
										</div>
									</div>
								</div>
								<# } #>
							</div>
						</div>
					</div>
					<div class="single-site-footer">
						<div class="site-action-buttons-wrap">
							<span class="responsive-site-demo-name">{{data.name}}</span>
							<div class="site-action-buttons-right">
								<button class="close-full-overlay responsive-addons"><span class="close-full-overlay-text"><?php esc_html_e( 'Go Back', 'responsive-addons' ); ?></span></button>
								<a href="{{{data.demo_api}}}" class="button button-hero site-preview-button" target="_blank">Preview "{{data.name}}" Site <i class="dashicons dashicons-external"></i></a>
								<div class="button button-hero button-primary single-page-import-button-{{{ data.demo_type }}} disabled"><?php esc_html_e( 'Select Template', 'responsive-addons' ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
				</div>
			</div>
			<div class="result_preview" style="display: none">
			</div>
		</div>
	</div>
</script>

<script type="text/template" id="tmpl-responsive-ready-sites-import-single-page-options-page">
	<div class="responsive-ready-sites-advanced-options-wrap single-page-import-options-page wp-full-overlay collapsed"
		data-page-id="{{{data.page_id}}}"
		data-demo-api="{{{data.demo_api}}}"
		data-includes-wp-forms="{{{data.includes_wp_forms}}}"
		data-wpforms-path="{{{data.wpforms_path}}}"
		data-required-plugins="{{ JSON.stringify( data.required_plugins )}}"
		data-required-pro-plugins="{{ JSON.stringify( data.required_pro_plugins )}}">
		<div class="wp-full-overlay-header">
			<div class="responsive-advanced-options-wrap">
					<div class="responsive-sites-demo-details">
							<div class="responsive-sites-demo-preview-logo-wrap">
								<img src="<?php echo esc_url( RESPONSIVE_ADDONS_URI . 'admin/images/svgs/responsive-starter-templates-thumbnail.svg' ); ?>">
							</div>
					</div>
					<div class="responsive-addons-import-btns">
						<a href="<?php echo esc_url(admin_url().'admin.php?page=responsive-add-ons'); ?>" class="rst-exit-to-dashboard"><img src="<?php echo esc_url( RESPONSIVE_ADDONS_URI . 'admin/images/svgs/exit-to-dashboard.svg' ); ?>"></a>
					</div>
				</div>
		</div>
		<div class="wp-full-overlay-main">
			<div class="sites-import-process-errors" style="display: none">
				<div class="import-process-error">
					<div class="current-importing-status-error-title"></div>
				</div>
			</div>

			<div class="site-import-options">
				<div class="responsive-ready-sites-advanced-options">
					<h2>Importing {{data.demo_name}}</h2>
					<p><?php esc_html_e( 'Importing this ready template will &hellip;', 'responsive-addons' ); ?></p>
					<ul class="responsive-ready-site-contents">
						<li class="responsive-ready-sites-import-plugins">
							<input type="checkbox" name="plugins" checked="checked" class="disabled checkbox" readonly>
							<strong><?php esc_html_e( 'Install Required Plugins', 'responsive-addons' ); ?></strong>
							<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-plugins-settings" data-tip-id="responsive-ready-sites-tooltip-plugins-settings"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
							<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-plugins-settings" style="display: none;">
								<ul class="required-plugins-list"><span class="spinner is-active"></span></ul>
								<# if ( data.pro_plugins_flag ) { #>
									<div class="responsive-ready-sites-third-party-plugins-warning"><?php esc_html_e( 'This ready template requires premium plugins. As these are third party premium plugins, you\'ll need to purchase, install and activate.', 'responsive-addons' ); ?></div>
									<ul class="required-third-party-plugins-list"><span class="is-active"></span></ul>
								<# } #>
							</div>
						</li>
						<li class="responsive-ready-sites-import-xml">
							<input type="checkbox" name="content" checked="checked" class="disabled checkbox" readonly>
							<strong><?php esc_html_e( 'Import Content', 'responsive-addons' ); ?></strong>
							<span class="responsive-ready-sites-tooltip-icon responsive-ready-sites-tooltip-site-content" data-tip-id="responsive-ready-sites-tooltip-site-content"><span class="dashicons dashicons-arrow-down-alt2"></span></span>
							<div class="responsive-ready-sites-tooltip-message" id="responsive-ready-sites-tooltip-site-content" style="display: none;">
								<p><?php esc_html_e( 'Imports ready template content. Depending on your internet speed this may take 1-3 minutes.', 'responsive-addons' ); ?></p>
							</div>
							<div class="responsive-ready-sites-import-process-wrap" style="display: none;">
								<progress class="responsive-ready-sites-import-process" max="100" value="0"></progress>
							</div>
						</li>
					</ul>
				</div>
				<div class="responsive-ready-sites-import-button-wrap">
					<a class="button button-hero button-primary responsive-ready-page-import-{{{ data.demo_type }}}" href="#">
						<?php esc_html_e( 'Import Template', 'responsive-addons' ); ?>
					</a>
				</div>
			</div>
			<div class="result_preview" style="display: none">
			</div>
		</div>
	</div>
</script>
<?php
wp_print_admin_notice_templates();

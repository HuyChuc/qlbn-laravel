<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
    <base href="{{asset('/')}}">
	<meta content="text/html;charset=utf-8" http-equiv="content-type" />
	<meta name="description" content="cmsmasters responsive html5 website template" />
	<meta name="keywords" content="html5, css3, template, responsive, adaptive" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>@yield('title') | Medicure</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="front/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="front/css/fonts.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="front/css/adaptive.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="front/css/retina.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="front/css/fontello.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,300italic,500,700,500italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="front/css/jackbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="front/css/jquery.jPlayer.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="front/css/dynamic-captions.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="front/css/static-captions.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="front/css/settings.css" media="screen" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" />
		<link rel="stylesheet" href="css/ieCss3.css" type="text/css" media="screen" />
	<![endif]-->
	<script src="front/js/jquery.min.js" type="text/javascript"></script>
	<script src="front/js/modernizr.custom.all.js" type="text/javascript"></script>
	<style>
		.contact_widget_phone > span,
		.contact_widget_email > span {width: 1%;}

		#box_color_1 {background-color: #56cce1;}
		#box_color_2 {background-color: #2cbfd9;}
		#box_color_3 {background-color: #2ca6d9;}
		#box_color_4 {background-color: #1b90da;}

		.content_icon.icon-glyph-2:before{color:#2ca6d9;}
		.content_icon.icon-glyph-3:before{color:#2cbfd9;}
		.content_icon.icon-glyph-4:before{color:#2ca6d9;}
		.content_icon.icon-glyph-5:before{color:#2cbfd9;}

		#text-2 .textwidget h1,
		#text-2 .textwidget h4 {
			text-align:center;
		}
		#text-2 .textwidget h1 {color:#1b90da;}
		#text-2 .textwidget h4 {color:#898989;}

		.post.type-post.one_fourth .cmsms_post_type_img > img {
			width:130px; 
			height:130px;
		}

		.type-testimonial img.cmsms_img {
			width:60px; 
			height:60px;
		}

		.textwidget #pb_35 {padding-bottom:35px;}
	</style>
</head>
<body class="page">

<!-- _________________________ Start Adv Medicure_WP Banner _________________________ -->	
{{-- <div class="adv_medicure">
	<div class="adv_medicure_inner">
	<a href="#"><img src="front/images/wp-version.jpg" alt="medicure_wp"></a>
	<span class="close"></span>
	</div>
</div> --}}
<script>
	
	jQuery(window).load(function() {
	  jQuery('.adv_medicure').addClass('banner_animated');
	  jQuery('.close').click(function(){
		jQuery('.adv_medicure').hide();
	  });
	});

</script>

<!-- _________________________ End Adv Medicure_WP Banner _________________________ -->

<!-- _________________________ Start Page _________________________ -->
<section id="page" class="csstransition cmsms_resp hfeed site">

	<!-- _________________________ Start Container _________________________ -->
	<div class="container">

		<!-- _________________________ Start Header _________________________ -->
		<header id="header">
			<div class="header_inner">
				<div class="custom_header">
					<div class="header_html">
						<span class="contact_widget_phone">
							Contact us:
							<span></span>
							+123 900 123 456
						</span>
						<span class="contact_widget_email">
							<span></span>
							<a href="mailto:info@medicuredemo.web">info@medicuredemo.web</a>
						</span>
					</div>
					<div class="wrap_social_icons">
						<ul class="social_icons">
							<li><a target="_blank" href="#" title="#"><img src="front/images/img/facebook.png" alt="#" /></a></li>
							<li><a target="_blank" href="#" title="#"><img src="front/images/img/twitter.png" alt="#" /></a></li>
							<li><a target="_blank" href="#" title="#"><img src="front/images/img/rss.png" alt="#" /></a></li>
							<li><a target="_blank" href="#" title="#"><img src="front/images/img/linkedin.png" alt="#" /></a></li>
							<li><a target="_blank" href="#" title="#"><img src="front/images/img/skype.png" alt="#" /></a></li>
						</ul>
						<div class="cl"></div>
						<a href="#" class="social_toggle">
							<span></span>
						</a>
					</div>
				</div>
				<a href="index.html" title="Medicure" class="logo">
					<img src="front/images/logo-jpeg.jpg" alt="Medicure" />
				</a>
				<a class="responsive_nav" href="javascript:void(0);">
					<span></span>
				</a>
				<!-- _________________________ Start Navigation _________________________ -->
				<div class="wrap_nav">
					<nav role="navigation">
						<ul id="navigation" class="navigation">
							<li class="menu-item {{ request()->is('/') ? 'current_page_item' : '' }}">
								<a href="/"><span>Trang chủ</span></a>
							</li>
							<li class="menu-item {{ request()->is('gioi-thieu') ? 'current_page_item' : '' }}"><a href="doctors.html"><span>Giới thiệu</span></a></li>
							<li class="menu-item {{ request()->is('tin-tuc*') ? 'current_page_item' : '' }}"><a href="/tin-tuc"><span>Tin tức</span></a></li>
							<li class="menu-item {{ request()->is('faq*') ? 'current_page_item' : '' }}"><a href="/faq"><span>Hỏi đáp</span></a></li>
							<li class="menu-item {{ request()->is('lien-he') ? 'current_page_item' : '' }}"><a href="appointments.html"><span>Liên hệ</span></a></li>
						</ul>
						<div class="cl"></div>
						<div class="wrap_header_search">
							<a class="search_but cmsms_icon" href="javascript:void(0);"></a>
							<div class="search_line">
								<form method="get" action="#">
									<p>
										<input name="s" id="error_search" placeholder="enter keywords" value="" type="text">
										<input value="" type="submit">
									</p>
								</form>
							</div>
						</div>
					</nav>
					<div class="cl"></div>
				</div>
				<div class="cl"></div>
				<!-- _________________________ Finish Navigation _________________________ -->
			</div>
			<div class="cl"></div>
		</header>
		<!-- _________________________ Finish Header _________________________ -->


@yield('body')



<!-- _________________________ Start Bottom _________________________ -->
        <div id="cmsms_latest_bottom_tweets">
			<div class="cmsms_latest_bottom_tweets_inner">
				<span class="tweets_icon"></span>
				<ul class="jta-tweet-list responsiveContentSlider">
					<li class="jta-tweet-list-item">
						100 Sales for Meducure theme, and it is only a start!  See why so many people liked it -
						<a href="http://t.co/Xzsvpy8rPQ" target="_blank" rel="nofollow">http://t.co/Xzsvpy8rPQ</a>
					</li>
					<li class="jta-tweet-list-item">
						#Wordpress We LOVE creating GOOD themes... #Medical #Health #Medicine
						<a href="http://t.co/PmSDQs9lHN" target="_blank" rel="nofollow">http://t.co/PmSDQs9lHN</a>
					</li>
					<li class="jta-tweet-list-item">
						CMS Masters And Their Best Web Design Tools #bestwebdesigntools #webdesign
						<a href="http://t.co/9d1vxenoNQ" target="_blank" rel="nofollow">http://t.co/9d1vxenoNQ</a>
						via @SlideShare
					</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function () { 
				jQuery('#cmsms_latest_bottom_tweets .jta-tweet-list').cmsmsResponsiveContentSlider( {
					sliderWidth : '100%',
					sliderHeight : 'auto',
					animationSpeed : 500,
					animationEffect : 'fade',
					animationEasing : 'linear',
					pauseTime : 7000,
					activeSlide : 1, 
					touchControls : true,
					pauseOnHover : false, 
					arrowNavigation : true, 
					slidesNavigation : false
				} );
			} );
		</script>
		
		<section id="bottom">
			<div class="bottom_inner">
				<div class="one_fourth">
					<aside id="text-3" class="widget widget_text">
						<h3 class="widgettitle">Medicure Information</h3>
						<div class="textwidget">
							<p id="pb_35">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							</p>
							<aside class="widget widget_custom_contact_info_entries" id="custom-contact-info-2">
								<div class="contact_widget_info">
									<span class="contact_widget_name">Medicure Ltd.</span>
									<span class="contact_widget_address">51, North Ave</span>
									<span class="contact_widget_city">New York</span>
									<span class="contact_widget_state">NY</span>
								</div>
								<span class="contact_widget_phone">(978) 373 45 22</span>
								<span class="contact_widget_email">
									<a href="mailto:copyright.cmsmasters@gmail.com">info@medicuredemo.web</a>
								</span>
							</aside>
						</div>
					</aside>
				</div>
				<div class="one_fourth">
					<aside id="nav_menu-2" class="widget widget_nav_menu">
						<h3 class="widgettitle">Doctors</h3>
						<div class="menu-doctors-container">
							<ul id="menu-doctors" class="menu">
								<li class="menu-item">
									<a href="#">Dr. Karen Dawson</a>
								</li>
								<li class="menu-item">
									<a href="#">Dr. Jack Simmons</a>
								</li>
								<li class="menu-item">
									<a href="#">Dr. Jack Zerriper</a>
								</li>
								<li class="menu-item">
									<a href="#">Dr. Michael Linden</a>
								</li>
								<li class="menu-item">
									<a href="#">Dr. Simon Green</a>
								</li>
								<li class="menu-item">
									<a href="#">Dr. Natalie Channing</a>
								</li>
								<li class="menu-item">
									<a href="#">Dr. Caroline Gerwig</a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="cl_resp"></div>
				<div class="one_fourth">
					<aside id="nav_menu-4" class="widget widget_nav_menu">
						<h3 class="widgettitle">Services</h3>
						<div class="menu-services-container">
							<ul id="menu-services" class="menu">
								<li class="menu-item">
									<a href="#">Pediatric Clinic</a>
								</li>
								<li class="menu-item">
									<a href="#">Diagnosis Clinic</a>
								</li>
								<li class="menu-item">
									<a href="#">Cardiac Clinic</a>
								</li>
								<li class="menu-item">
									<a href="#">Laboratory Analysis</a>
								</li>
								<li class="menu-item">
									<a href="#">Dental Clinic</a>
								</li>
								<li class="menu-item">
									<a href="#">Gynecological Clinic</a>
								</li>
								<li class="menu-item">
									<a href="#">Psychological Counseling</a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="one_fourth">
					<aside class="widget widget_custom_contact_form_entries">
						<h3 class="widgettitle">Quick Contacts</h3>
						<div class="cmsms-form-builder">
							<div class="box success_box widgetinfo">
								<table>
									<tr>
										<td>&nbsp;</td>
										<td>Thank You!<br>Your message has been sent successfully.</td>
									</tr>
								</table>
							</div>
							<script type="text/javascript">
								jQuery(document).ready(function () { 
									jQuery('#form_contact_form_widget_001').validationEngine('init');
									
									jQuery('#form_contact_form_widget_001 a#contact_form_widget_001_wformsend').click(function () { 
										var form_builder_url = jQuery('#contact_form_widget_001_wurl').val();
										
										jQuery('#form_contact_form_widget_001 .loading').animate( {
											opacity : 1
										} , 250);
										
										if (jQuery('#form_contact_form_widget_001').validationEngine('validate')) { 
											jQuery.post(form_builder_url, { 
												field_003 : jQuery('#field_003').val(), 
												field_004 : jQuery('#field_004').val(), 
												formname : 'contact_form_widget_001', 
												formtype : 'widget' 
											}, function () { 
												jQuery('#form_contact_form_widget_001 .loading').animate( { opacity : 0 }, 250);
												document.getElementById('form_contact_form_widget_001').reset();
												jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').hide();
												jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').fadeIn('fast');
												jQuery('html, body').animate( { scrollTop : (jQuery('#form_contact_form_widget_001').offset().top - 100) }, 'slow');
												jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').delay(5000).fadeOut(1000);
											} );
											
											return false;
										} else { 
											jQuery('#form_contact_form_widget_001 .loading').animate( { opacity : 0 }, 250);
											
											return false;
										}
									} );
								} );
							</script>
							<form action="#" method="post" id="form_contact_form_widget_001">
								<div class="form_info cmsms_input">
									<label for="field_003">Your Email<span class="color_3"> *</span></label>
									<input type="text" name="wemail" id="field_003" size="22" tabindex="12" class="validate[required,custom[email]]" />
								</div>
								<div class="form_info cmsms_textarea">
									<label for="field_004">Your message<span class="color_3"> *</span></label>
									<textarea name="wmessage" id="field_004" cols="28" rows="6" tabindex="13" class="validate[required,minSize[3]]"></textarea>
								</div>
								<div class="loading"></div>
								<div><input type="hidden" name="contact_form_widget_001_wurl" id="contact_form_widget_001_wurl" value="http://your_site.net/php/sendmail.php" /></div><!-- Here you need to set the path to the sendmail file -->
								<div><a href="#" id="contact_form_widget_001_wformsend" class="button_small" tabindex="14"><span>Submit</span></a></div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</section>
		<!-- _________________________ Finish Bottom _________________________ -->

		<a href="javascript:void(0);" id="slide_top"></a>
	</div>
	<!-- _________________________ Finish Container _________________________ -->

	<!-- _________________________ Start Footer _________________________ -->

	<footer id="footer" role="contentinfo">
		<span class="copyright">Medicure © 2014 | All Rights Reserved</span>
		<ul id="footer_nav" class="footer_nav">
			<li class="menu-item">
				<a href="index.html">Home</a>
			</li>
			<li class="menu-item">
				<a href="about.html">About Us</a>
			</li>
			<li class="menu-item">
				<a href="doctors.html">Doctors</a>
			</li>
			<li class="menu-item">
				<a href="blog.html">Blog</a>
			</li>
			<li class="menu-item">
				<a href="contacts.html">Contacts</a>
			</li>
		</ul>
	</footer>
	<!-- _________________________ Finish Footer _________________________ -->

</section>
<!-- _________________________ Finish Page _________________________ -->

	<script src="front/js/respond.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="front/js/jquery.themepunch.revolution.js"></script>
	<script type="text/javascript" src="front/js/jquery.themepunch.revolution.min.js"></script>	
	<script type="text/javascript" src="front/js/jquery.themepunch.plugins.min.js"></script>
	<script type='text/javascript' src='front/js/jquery.easing.min.js?ver=1.3.0'></script>
	<script src="front/js/jquery.script.js" type="text/javascript"></script>
	<script src="front/js/jackbox-lib.js" type="text/javascript"></script>
	<script src="front/js/jackbox.js" type="text/javascript"></script>
	<script src="front/js/jquery.flickrfeed.min.js" type="text/javascript"></script>
	<script src="front/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="front/js/jquery.validationEngine-lang.js" type="text/javascript"></script>
	<script src="front/js/jquery.validationEngine.min.js" type="text/javascript"></script>
</body>
</html>

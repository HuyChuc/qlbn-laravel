<section id="sidebar">
           
            
    <div class="one_first">
        <aside id="custom-posts-tabs-2" class="widget widget_custom_posts_tabs_entries">
            <h3 class="widgettitle">Bài viết mới</h3>
            <div class="tab lpr">
              
                <div class="tab_content">
                    <div class="tabs_tab tab_latest">
                        <ul>
                            @foreach ($latests as $latest)
                             
                                <li>
                                    <div class="alignleft">
                                        <figure>
                                            <a href="" title="Center for Medical Technology Innovation">
                                                <img width="50" height="50" src="" class=" wp-post-image" alt="" title="" />		
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="ovh">
                                        <a href="openpost.html" title="Center for Medical Technology Innovation">
                                            {{$latest->title}}
                                        </a>
                                        <br />		
                                        <small> <abbr class="published" title="24-01-2014">{{date('d M, Y', strtotime($post->published_at))}}</abbr>
                                        </small>
                                    </div>
                                    <div class="cl"></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <div class="one_first">
        <aside id="custom-recent-testimonials-2" class="widget widget_custom_recent_testimonials_entries">
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    jQuery('#custom-recent-testimonials-2 .widget_custom_services_entries_slides').cmsmsResponsiveContentSlider({
                        sliderWidth: '100%',
                        sliderHeight: 'auto',
                        animationSpeed: 500,
                        animationEffect: 'slide',
                        animationEasing: 'easeInOutExpo',
                        pauseTime: 7000,
                        activeSlide: 1,
                        touchControls: true,
                        pauseOnHover: false,
                        arrowNavigation: false,
                        slidesNavigation: false,
                        afterSliderLoad: function () {
                            if (jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0) {
                                jQuery(window).trigger('resize');
                            }
                        },
                        afterSlideChange: function () {
                            if (jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0) {
                                jQuery(window).trigger('resize');
                            }
                        }
                    });
                });
            </script>
            <div class="widget_custom_services_entries_container">
                <h3 class="widgettitle">Testimonials</h3>
                <ul class="widget_custom_services_entries_slides responsiveContentSlider">
                    <li>
                        <div class="tl-content_wrap">
                            <div class="tl-content">
                                <p>
                                    Lorem ipsum dolor sit amet, usu id dignissim consectetuer, lorem graece cotidieque vel ex, ferri labitur id nam. Ne cum legere everti consetetur, cu nec doctus appellantur.
                                </p>
                            </div>
                        </div>
                        <figure class="tl_author_img">
                            <img width="150" height="150" src="https://medicure-html.cmsmasters.net/openpost.html/images/Woman-smiling-21-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Rebecca Martins" title="Rebecca Martins" style="width:45px; height:45px;" />		
                        </figure>
                        <a target="_blank" href="#" class="tl_author">Rebecca Martins</a>
                        <p class="tl_company">29 years</p>
                    </li>
                    <li>
                        <div class="tl-content_wrap">
                            <div class="tl-content">
                                <p>
                                    Lorem ipsum dolor sit amet, usu id dignissim consectetuer, lorem graece cotidieque vel ex, ferri labitur id nam. Ne cum legere everti consetetur, cu nec doctus appellantur.
                                </p>
                            </div>
                        </div>
                        <figure class="tl_author_img">
                            <img width="150" height="150" src="https://medicure-html.cmsmasters.net/openpost.html/images/happy-to-help-you-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Jeff Blake" title="Jeff Blake" style="width:45px; height:45px;" />		
                        </figure>
                        <a target="_blank" href="#" class="tl_author">Jeff Blake</a>
                        <p class="tl_company">37 years</p>
                    </li>
                    <li>
                        <div class="tl-content_wrap">
                            <div class="tl-content">
                                <p>
                                    Lorem ipsum dolor sit amet, usu id dignissim consectetuer, lorem graece cotidieque vel ex, ferri labitur id nam. Ne cum legere everti consetetur, cu nec doctus appellantur.
                                </p>
                            </div>
                        </div>
                        <figure class="tl_author_img">
                            <img width="150" height="150" src="https://medicure-html.cmsmasters.net/openpost.html/images/Dentist-Sandy-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Fredrick Keen" title="Fredrick Keen" style="width:45px; height:45px;" />		
                        </figure>
                        <a target="_blank" href="#" class="tl_author">Frederick</a>
                        <p class="tl_company">52 years</p>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</section>
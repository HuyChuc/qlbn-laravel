@extends('front.layout.master')
@section('title', 'Hỏi đáp')

@section('body')
<section id="middle">

    <div class="content_wrap r_sidebar">

            <!--_________________________ Start Content _________________________ -->				
        <section id="content" role="main">
            <div class="entry">
                <section class="blog opened-article">

                    <!--_________________________ Start Standard Article _________________________ -->
                    <article class="post type-post status-publish format-standard hentry category-blog-post category-medical category-text-posts tag-blog tag-image-2">
                        <div class="cmsms_info">
                          
                        </div>
                        <div class="ovh">
                            <header class="entry-header">
                                <h2 class="entry-title">Hỏi: {{$faq->title}}</h2>
                                <div class="cmsms_post_info">
                                    
                                </div>
                            </header>
                            <div class="entry-content">
                                Trả lời: {!! $faq->content !!}
                                <div class="cmsms_cc"></div>
                            </div>
                            <div class="cl"></div>
                            <footer class="entry-meta"></footer>
                        </div>
                    </article>
                    <!--_________________________ Finish Standard Article _________________________ -->
                </section>
            </div>
        </section>
            <!-- _________________________ Finish Content _________________________ -->				

            <!-- _________________________ Start Sidebar _________________________ -->				
        <!-- _________________________ Finish Sidebar _________________________ -->				
    <div class="cl"></div>
</div>
</section>

@endsection
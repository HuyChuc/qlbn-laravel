@extends('front.layout.master')
@section('title', 'Hỏi đáp')

@section('body')
<section id="middle">
    <div class="headline">
        <h1>@yield('title')</h1>
    </div>
    <div class="cmsms_breadcrumbs">
        <a href="/" class="cms_home">Trang chủ</a>
        <span class="breadcrumbs_sep">/</span>
        <span>@yield('title')</span>
    </div>
    <div class="content_wrap r_sidebar">
        <section id="content" role="main">
            <div class="entry">
                <div class="cmsms_cc"></div>
            </div>
            <div class="entry-summary">
                <section class="blog">
        
                    @foreach ($faqs as $faq)
                        <article class="post type-post status-publish format-standard hentry category-blog-post category-medical category-text-posts tag-blog tag-image-2">
                            <div class="cmsms_info">
                                <span class="cmsms_post_format_img"></span>
                                <div class="cmsms_like">
                                </div> 
                            </div>
                            <div class="ovh">
                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="faq/{{$faq->id}}">{{$faq->title}}</a>
                                    </h2>
                                    <div class="cmsms_post_info">
                                    </div>
                                </header>
                                <div class="entry-content">
                                    {{ str_limit($faq->content, $limit = 250, $end = '...') }}
                                    {{-- {!! $faq->content !!} --}}
                                </div>
                                <div class="cl"></div>
                                <div class="divider"></div>
                                <footer class="entry-meta"></footer>
                            </div>
                        </article>
                    @endforeach			
                    
              
                </section>
            </div>
        </section>
        	
    <div class="cl"></div>
</div>
</section>

@endsection
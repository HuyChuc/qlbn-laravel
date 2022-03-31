@extends('front.layout.master')
@section('title', 'Tin tức')

@section('body')
<section id="middle">

    <div class="content_wrap r_sidebar">

        <section id="content" role="main">
            <div class="entry">
                <div class="cmsms_cc"></div>
            </div>
            <div class="entry-summary">
                <section class="blog">
        
                    @foreach ($posts as $post)
                        <article class="post type-post status-publish format-standard hentry category-blog-post category-medical category-text-posts tag-blog tag-image-2">
                            <div class="cmsms_info">
                                <span class="cmsms_post_format_img"></span>
                                <div class="cmsms_like">
                                    <a href="#" onclick="return false;" id="cmsmsLike-527" class="cmsmsLike active">
                                        <span>63</span>
                                    </a>
                                </div> 
                                <abbr class="published" title="March 13, 2013"><span class="cmsms_post_day">{{date('d', strtotime($post->published_at))}}</span>
                                    <span class="cmsms_post_year">{{date('Y', strtotime($post->published_at))}}</span>
                                    <span class="cmsms_post_month">{{date('M', strtotime($post->published_at))}}</span>
                                </abbr> 
                            </div>
                            <div class="ovh">
                                <header class="entry-header">
                                    {{-- <figure>
                                        <a href="openpost.html" class="preloader" title="Standard Post With an Image">
                                            <img width="710" height="400" src="https://medicure-html.cmsmasters.net/blog.html/images/stethoscope-on-clipboard-s-710400-710x400.jpg" class="fullwidth wp-post-image" alt="Standard Post With an Image" title="Standard Post With an Image" />				
                                        </a>
                                    </figure> --}}
                                    <h2 class="entry-title">
                                        <a href="tin-tuc/{{$post->id}}">{{$post->title}}</a>
                                    </h2>
                                    <div class="cmsms_post_info">
                                       
            
                                    </div>
                                </header>
                                <div class="entry-content">
                                    {!! $post->slug !!}
                                </div>
                                <a class="more_button" href="tin-tuc/{{$post->id}}">Đọc thêm</a>
                                <div class="cl"></div>
                                <div class="divider"></div>
                                <footer class="entry-meta"></footer>
                            </div>
                        </article>
                    @endforeach	
                    {{$posts->links()}}		
                    
                    <!--_________________________ Finish Standard Article _________________________ -->				
        
                    <!--_________________________ Start Aside Article _________________________ -->				
                            
        
                </section>
            </div>
        </section>
            <!-- _________________________ Finish Content _________________________ -->				

            <!-- _________________________ Start Sidebar _________________________ -->				
            @include('front.layout.sidebar')
        <!-- _________________________ Finish Sidebar _________________________ -->				
    <div class="cl"></div>
</div>
</section>

@endsection
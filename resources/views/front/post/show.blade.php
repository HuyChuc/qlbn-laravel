@extends('front.layout.master')
@section('title', 'Tin tức')

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
                            <span class="cmsms_post_format_img"></span>
                            <div class="cmsms_like">
                                <a href="#" onclick="return false;" id="cmsmsLike-527" class="cmsmsLike active">
                                    <span>63</span>
                                </a>
                            </div> <abbr class="published" title="March 13, 2013"><span class="cmsms_post_day">{{date('d', strtotime($post->published_at))}}</span>
                                <span class="cmsms_post_year">{{date('Y', strtotime($post->published_at))}}</span>
                                <span class="cmsms_post_month">{{date('M', strtotime($post->published_at))}}</span></abbr> 
                        </div>
                        <div class="ovh">
                            <header class="entry-header">

                                {{-- image --}}
                                {{-- <figure>
                                    <a href="#" class="preloader jackbox" data-group="1" title="Standard Post With an Image">
                                        <img width="710" height="400" src="" class="fullwidth wp-post-image" alt="Standard Post With an Image" title="Standard Post With an Image" />
                                    </a>
                                </figure> --}}
                                {{-- end image --}}
                                <h2 class="entry-title">{{$post->title}}</h2>
                                <div class="cmsms_post_info">
                                    
                                </div>
                            </header>
                            <div class="entry-content">
                                {!! $post->perex !!}
                                <div class="cmsms_cc"></div>
                            </div>
                            <div class="cl"></div>
                            <footer class="entry-meta"></footer>
                        </div>
                    </article>
                    <!--_________________________ Finish Standard Article _________________________ -->

                    
                    <br />
          
                    <aside id="comments">
                        <h3>Comment (1)</h3>
                        <ol class="commentlist">
                            <li class="comment even thread-even depth-1" id="li-comment-9">
                                <div id="comment-9" class="comment-body">
                                    <div class="fl">
                                        <div class="alignleft">
                                            <img alt='' src='http://1.gravatar.com/avatar/b642b4217b34b1e8d3bd915fc65c4452?s=100&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D100&amp;r=G' class='avatar avatar-100 photo' height='100' width='100' />
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <h4 class="fn">Brian</h4>
                                        <a class='comment-reply-link' href='#' onclick='return addComment.moveForm("comment-9", "9", "respond", "527")'>Reply</a> <abbr class="published" title="December 04, 2012 / 8:14 am">By December 04, 2012 / 8:14 am</abbr>
                                        <div class="cl"></div>
                                        <p>
                                            That is really great, I like it when I can apply all the needed changes is a few clicks without having to deal with code!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <!-- #comment-## -->
                        </ol>
                    </aside>

                  
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
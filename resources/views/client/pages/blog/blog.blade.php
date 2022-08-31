@extends('client.layout.master')
@section('content')
<style>
    .bannarblog {
        background-color: #f4f4f4;
        background-image: url("{{asset('assetsclient/img/close-up-financial-advisor.jpg')}}");
    }
</style>
<!-- ============================ Page Title Start================================== -->
<div class="page-title bannarblog" data-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                    </ol>
                    <h2 class="breadcrumb-title">How To Increase Wordpress Speed</h2>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->


<!-- ============================ Agency List Start ================================== -->
<section class="gray">

    <div class="container">

        <div class="row">
            <div class="col text-center">
                <div class="sec-heading center">
                    <h2>Latest News</h2>
                    <p>We post regulary most powerful articles for help and support.</p>
                </div>
            </div>
        </div>

        <!-- row Start -->
        <div class="row">

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>12</span>Sep 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">Creative Designs</a><span class="latest_new_post">New</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. <a href="{{url('/blogmore')}}"><b> READ MORE</b></a>
                            <!-- <span class="text-dark mt-1 mr-2 readmore"></span> -->
                        </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Shaurya Preet</a></h5>
                        </div>
                        <!-- <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>202</span> -->
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>15</span>Aug 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">UX/UI Developer</a><span class="latest_new_post hot">Hot</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Nirgam Singh</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>407</span>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>27</span>Nov 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">WordPress Developer & UI</a><span class="latest_new_post">New</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Dhananjay Singh</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>410</span>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>12</span>Sep 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">Creative Designs</a><span class="latest_new_post">New</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Shaurya Preet</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>202</span>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>15</span>Aug 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">UX/UI Developer</a><span class="latest_new_post hot">Hot</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Nirgam Singh</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>407</span>
                    </div>

                </div>
            </div>

            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>27</span>Nov 2021</div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="blog-detail.html">WordPress Developer & UI</a><span class="latest_new_post">New</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('assetsclient/img/b-1.jpg')}}" class="img-fluid" alt=""></a></div>
                            <h5><a href="agent-page.html" tabindex="-1">Dhananjay Singh</a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>410</span>
                    </div>

                </div>
            </div>

        </div>
        <!-- /row -->

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="pagination p-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-arrow-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">18</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-arrow-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</section>
<!-- ============================ Agency List End ================================== -->
<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call_action_wrap-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call_action_wrap">
                    <div class="call_action_wrap-head">
                        <h3>Do You Have Questions ?</h3>
                        <span>We'll help you to grow your career and growth.</span>
                    </div>
                    <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->

@endsection
@push('script')
<script type="text/javascript">
    (function() {
        window.addEventListener('load', function() {
            var characterCount = 500
            var blogParagraph = document.querySelectorAll('.blog')
            var trail = "..."
            // Shorten a string to less than maxLen characters without truncating words.
            function shorten(str, maxLen, separator = ' ') {
                if (str.length <= maxLen) return str;
                return str.substr(0, str.lastIndexOf(separator, maxLen));
            }
            blogParagraph.forEach(item => {
                item.textContent = shorten(item.textContent, characterCount) + trail;
            })
        })
    })()
</script>
@endpush
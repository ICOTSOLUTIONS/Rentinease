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
                    <p>We post regulary most remarkable articles for help and backing.</p>
                </div>
            </div>
        </div>

        <!-- row Start -->
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">

                    <div class="gtid_blog_thumb">
                        <a href="blog-detail.html"><img src="{{asset('storage/blog/'.$blog->image)}}" class="img-fluid" alt="" /></a>
                        <div class="gtid_blog_info"><span>{{ $blog->created_at->format('d-m-Y') }}</span></div>
                    </div>

                    <div class="blog-body">
                        <h4 class="bl-title"><a href="{{ route('web.blog.details', ['id' => $blog->id]) }}">{{ $blog->heading }}</a></h4>
                        <div class="blog"> {!! $blog->text !!}
                            <!-- <span class="text-dark mt-1 mr-2 readmore"></span> -->
                        </div>
                        <a href="{{ route('web.blog.details', ['id' => $blog->id]) }}"><b> READ MORE</b></a>
                    </div>

                    <div class="modern_property_footer">
                        <div class="property-author">
                            @if ($blog->user->role_id == 1)
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('storage/admin/'.$blog->user->logo)}}" class="img-fluid" alt=""></a></div>
                            @else
                            <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="{{asset('storage/blogger/'.$blog->user->logo)}}" class="img-fluid" alt=""></a></div>
                            @endif
                            <h5><a href="agent-page.html" tabindex="-1">{{ $blog->user->fname.' '.$blog->user->lname }}</a></h5>
                        </div>
                        <!-- <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>202</span> -->
                    </div>

                </div>
            </div>

            @endforeach
        </div>
        <!-- /row -->

        <!-- Pagination -->
        <!-- <div class="row">
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
        </div> -->

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
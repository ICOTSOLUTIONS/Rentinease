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
                    <!-- <h2 class="breadcrumb-title">How To Increase Wordpress Speed</h2> -->
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->



<!-- ============================ Agency List Start ================================== -->
<section class="gray">

    <div class="container">

        <!-- row Start -->
        <div class="row">

            <!-- Blog Detail -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- Author Detail -->
                <div class="article_detail_wrapss single_article_wrap format-standard">

                    <div class="article_posts_thumb">
                        <span class="img"><img class="img-fluid" src="{{asset('assetsclient/img/myimg.jpg')}}" alt=""></span>
                        <h3 class="pa-name">Adnan</h3>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <p class="pa-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    </div>
                </div>
                <div class="article_detail_wrapss single_article_wrap format-standard">
                    <div class="article_body_wrap">

                        <div class="article_featured_image">
                            <img class="img-fluid" src="assets/img/b-6.jpg" alt="">
                        </div>
                        <h2 class="post-title">Blog Details 'Title'</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem. <br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                        <blockquote>
                            <span class="icon"><i class="fas fa-quote-left"></i></span>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tem
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo onsequat.</p>
                            <h5 class="name">- Rosalina Pong</h5>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                            dolorem. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis
                            iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                    </div>
                </div>


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
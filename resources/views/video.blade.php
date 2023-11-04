@extends('master')
@section('content')
        <!-- Gallery -->
        <div class="pozo-section pt-130">
            <div class="pozo-gallery">
                <div class="container">
                    <div class="row mb-4">
                        <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                            <h4>Video Gallery</h4>
                        </div>
                        <!-- IMPORTANT: Some functionality (ajax, iframes, etc) will not work when you're opening local file directly on your browser, the code must be running on a web server. SOURCE: https://fancyapps.com/fancybox/3/docs/ -->
                        <div class="col-md-6 mb-40 animate-box" data-animate-effect="fadeInUp">
                            <a data-fancybox="" href="https://www.youtube.com/watch?v=ybso7mzV2hY"> <img class="img-fluid" src="images/gallery/08.jpg" alt="">
                                <p><span class="fa fa-play"></span></p>
                            </a>
                            <h5>Youtube Video (Popup)</h5>
                        </div>
                        <div class="col-md-6 mb-40 animate-box" data-animate-effect="fadeInUp">
                            <a data-fancybox="" data-ratio="2" href="https://vimeo.com/74295728"> <img class="img-fluid" src="images/gallery/20.jpg" alt="">
                                <p><span class="fa fa-play"></span></p>
                            </a>
                            <h5>Vimeo Video (Popup)</h5>
                        </div>
                        <div class="col-md-6 mb-40 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                            <a data-fancybox="bigbuckbunny" href="images/video.mp4"> <img class="img-fluid" src="images/gallery/15.jpg" alt="">
                                <p><span class="fa fa-play"></span></p>
                            </a>
                            <h5>Custom Video (Popup)</h5>
                        </div>
                        <div class="col-md-6 mb-40 animate-box" data-animate-effect="fadeInUp">
                            <a data-fancybox="" href="https://www.youtube.com/watch?v=cnM7NpF0tdQ"> <img class="img-fluid" src="images/gallery/13.jpg" alt="">
                                <p><span class="fa fa-play"></span></p>
                            </a>
                            <h5>Youtube Video (Popup)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
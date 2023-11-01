@extends('master')
@section('content')
<!-- Gallery -->
<div class="pozo-section">
    <div class="container">
        <div class="row mb-4">
            <div class="section-head text-center col-md-12 animate-box" data-animate-effect="fadeInUp">
                <h4>Recent <span>Shots</span></h4>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/01.jpg') }}" data-caption="Quisque in felis"> <img class="img-fluid" src="{{ asset('html/images/gallery/01.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/02.jpg') }}" data-caption="Pellentesque habitant"> <img class="img-fluid" src="{{ asset('html/images/gallery/02.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/11.jpg') }}" data-caption="Curabitur convallis"> <img class="img-fluid" src="{{ asset('html/images/gallery/11.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/03.jpg') }}" data-caption="Quisque in dolor"> <img class="img-fluid" src="{{ asset('html/images/gallery/03.jpg') }}" alt="" /> </a>
                </figure>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/18.jpg') }}" data-caption="Aliquam non luctus"> <img class="img-fluid" src="{{ asset('html/images/gallery/18.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/17.jpg') }}" data-caption="Quality in felis"> <img class="img-fluid" src="{{ asset('html/images/gallery/17.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/16.jpg') }}" data-caption="Vivamus a nisi"> <img class="img-fluid" src="{{ asset('html/images/gallery/16.jpg') }}" alt="" /> </a>
                </figure>
            </div>
            <div class="col-md-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/08.jpg') }}" data-caption="Mauris pretium"> <img class="img-fluid" src="{{ asset('html/images/gallery/08.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/09.jpg') }}" data-caption="Nunc blandit purus"> <img class="img-fluid" src="{{ asset('html/images/gallery/09.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/07.jpg') }}" data-caption="Nunc ultrices tellus"> <img class="img-fluid" src="{{ asset('html/images/gallery/07.jpg') }}" alt="" /> </a>
                </figure>
                <figure>
                    <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/19.jpg') }}" data-caption="Orci varius natoque"> <img class="img-fluid" src="{{ asset('html/images/gallery/19.jpg') }}" alt="" /> </a>
                </figure>
            </div>
        </div>
        <!-- show more -->
        <div class="row mb-4 align-items-stretch mt-60">
            <div class="col-12">
                <!-- show more -->
                <div class="pozo-show-more-container">
                    <div class="row align-items-stretch pozo-photos" id="pozo-section-photos">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/12.jpg') }}" data-caption="Vestibulum leo velit"> <img class="img-fluid" src="{{ asset('html/images/gallery/12.jpg') }}" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/05.jpg') }}" data-caption="Etiam imperdiet hendrerit"> <img class="img-fluid" src="{{ asset('html/images/gallery/05.jpg') }}" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/13.jpg') }}" data-caption="Nulla turpis elementum"> <img class="img-fluid" src="{{ asset('html/images/gallery/13.jpg') }}" alt="" /> </a>
                            </figure>
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/06.jpg') }}" data-caption="Pellentesque habitant"> <img class="img-fluid" src="{{ asset('html/images/gallery/06.jpg') }}" alt="" /> </a>
                            </figure>
                        </div>
                        <div class="col-md-4 d-none d-lg-block animate-box" data-animate-effect="fadeInUp">
                            <figure>
                                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/14.jpg') }}" data-caption="Quisque in felis"> <img class="img-fluid" src="{{ asset('html/images/gallery/14.jpg') }}" alt="" /> </a>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- add more -->
                <div class="pozo-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                    <a href="index.html#" class="pozo-more-trigger flex"> <span class="plus flex-center">&nbsp;</span> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

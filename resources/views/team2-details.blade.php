@extends('master')
@section('content')
  <!-- Team Details -->
  <section class="team-box pt-180 mb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-7 mb-30 animate-box" data-animate-effect="fadeInUp">
            <div class="img mb-60"> <img src="{{ asset('html/images/slider/2.jpg') }}" class="img-fluid" alt=""> </div>
            <h4>Simeon Owolabi</h4>
            <p class="mb-30">I am professional photographer based on New York, creating dreamscapes with black, white and shades in-between. I love to pause the wild, happy and real moments of life, just to hear their stories untold. Viverra tristique usto duis vitae diam neque nivamus estan.</p>
            <ul class="list-unstyled team-box-list mb-60">
                <li>
                    <div class="team-box-list-icon"> <span class="fa fa-check"></span> </div>
                    <div class="team-box-list-text">
                        <p>Over 10 years of experience</p>
                    </div>
                </li>
                <li>
                    <div class="team-box-list-icon"> <span class="fa fa-check"></span> </div>
                    <div class="team-box-list-text">
                        <p>100+ successfully executed projects</p>
                    </div>
                </li>
            </ul>
            <!-- tab -->
            <ul class="nav nav-tabs simpl-bord mt-60" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"> <span class="nav-link active cursor-pointer" id="vision-tab" data-bs-toggle="tab" data-bs-target="#biography">Biography</span> </li>
                <li class="nav-item" role="presentation"> <span class="nav-link cursor-pointer" id="mission-tab" data-bs-toggle="tab" data-bs-target="#education">Education</span> </li>
                <li class="nav-item" role="presentation"> <span class="nav-link cursor-pointer" id="mission-tab" data-bs-toggle="tab" data-bs-target="#awards">Awards</span> </li>
            </ul>
            <div class="tab-content mb-60" id="myTabContent">
                <div class="tab-pane fade show active" id="biography" role="tabpanel" aria-labelledby="vision-tab">
                    <p>Biography utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                </div>
                <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="mission-tab">
                    <p>Education utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                </div>
                <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="mission-tab">
                    <p>Awards utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 animate-box" data-animate-effect="fadeInUp">
            <div class="wrap">
                <div class="desc">
                    <div class="section-title mb-15">Contact Me</div>
                    <p>I am professional photographer based on New York, creating dreamscapes with black, white and shades in-between.</p>
                </div>
                <div class="cont">
                    <div class="coll">
                        <h6>Email Us Directly</h6>
                    </div>
                    <div class="coll">
                        <h5>reachus@adrahstudios.com</h5>
                    </div>
                </div>
                <div class="cont">
                    <div class="coll">
                        <h6>Call Us Directly</h6>
                    </div>
                    <div class="coll">
                        <h5>855 100 4444 / 22</h5>
                    </div>
                </div>
                <div class="cont">
                    <div class="coll">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/adrahstudios"><i class="fa fa-facebook"></i></a>
                            <a href="index.html"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/adrahstudios/"><i class="fa fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

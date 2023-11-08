@extends('master')
@section('content')
  <!-- Team Details -->
  <section class="team-box pt-180 mb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-7 mb-30 animate-box" data-animate-effect="fadeInUp">
            <div class="img mb-60"> <img src="{{ asset('html/images/slider/2.jpg') }}" class="img-fluid" alt=""> </div>
            <h4>Adetunji</h4>
            <p class="mb-30">
                Adetunji is a seasoned professional photographer whose passion
                for capturing the beauty of his subjects through the lens has
                transformed into a remarkable career. With a keen eye for detail
                 and an innate talent for composing striking images, Adetunji has
                  established himself as a prominent figure in the world of photography.
                   His works showcase a diverse range of subjects,
                   from breathtaking portraits to captivating wedding photography.
                   Adetunji is a sought-after photographer for both personal and commercial projects.
                   His dedication to perfecting his craft and commitment to delivering stunning,
                 timeless photographs sets Adetunji apart as a true professional in the world of photography.
            </p>
            <ul class="list-unstyled team-box-list mb-60">
                <li>
                    <div class="team-box-list-icon"> <span class="fa fa-check"></span> </div>
                    <div class="team-box-list-text">
                        <p>Over 9+ years of experience</p>
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

            </ul>
            <div class="tab-content mb-60" id="myTabContent">
                {{-- <div class="tab-pane fade show active" id="biography" role="tabpanel" aria-labelledby="vision-tab">
                    <p>Biography utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitaerisus duise nisan sapien silver sapien.</p>
                </div> --}}

            </div>
        </div>
        <div class="col-md-4 offset-md-1 animate-box" data-animate-effect="fadeInUp">
            <div class="wrap">
                <div class="desc">
                    <div class="section-title mb-15">Contact Me</div>
                    <p> Adetunji is a seasoned professional photographer whose passion
                        for capturing the beauty of his subjects through the lens has
                        transformed into a remarkable career.</p>
                </div>
                <div class="cont">
                    <div class="coll">
                        <h6>Email Us Directly</h6>
                    </div>
                    <div class="coll">
                        <h5>contact@adrahstudios.com</h5>
                    </div>
                </div>
                <div class="cont">
                    <div class="coll">
                        <h6>Call Us Directly</h6>
                    </div>
                    <div class="coll">
                        <h5>+447565241644</h5>
                    </div>
                </div>
                <div class="cont">
                    <div class="coll">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/adrahstudios"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/AdrahStudios"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/adrahstudios/"><i class="fa fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

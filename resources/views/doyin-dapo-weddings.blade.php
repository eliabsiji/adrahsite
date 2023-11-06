@extends('master')
@section('content')
  <!-- Project Page -->
  <div class="post container pt-130">
    <div class="row">
        <div class="col-md-12 animate-box" data-animate-effect="fadeInU"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" alt="">
            <h2 class="mt-20"><span>Doyin and Dapo Wedding Shots</span></h2>
            <p>Quisque vel aliquam purus, at pulvinar enim. Mauris tincidunt egestas tincidunt. Morbi orci mi, egestas et lorem vel, ullamcorper ultrices est. Donec luctus ornare ultricies. Integer a tristique erat. Praesent vestibulum nunc nec consequat venenatis. Etiam porttitor aliquet pretium. Praesent gravida elit enim, eget porttitor tellus pretium at. Quisque ornare gravida vehicula. Ut ullamcorper dui suscipit, lacinia lorem ac, feugiat nibh. Integer odio augue, auctor tincidunt volutpat sed, convallis vel nulla.</p>
            <p>Praesent vestibulum nunc nec consequat venenatis. Etiam porttitor aliquet pretium. Praesent gravida elit enim, eget porttitor tellus pretium at. Quisque ornare gravida vehicula. Ut ullamcorper dui suscipit, lacinia lorem ac, feugiat nibh. Integer odio augue, auctor tincidunt volutpat sed, convallis vel nulla.</p>
            <br />
        </div>
    </div>
</div>
<!-- Gallery -->
<div class="container">
    <div class="row mb-4">
        <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/doyinanddapowedding/1.jpg') }}" data-caption="Quisque in felis"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/1.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/doyinanddapowedding/11d.jpg') }}" data-caption="Duis viverra moss"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/11d.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/doyinanddapowedding/12.jpg') }}" data-caption="Quisque cursus place"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/12.jpg') }}" alt="" /> </a>
            </figure>
        </div>
        <div class="col-6 col-md-6 animate-box" data-animate-effect="fadeInU">
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" data-caption="Aliquam non luctus"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" data-caption="Vivamus sit amet"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" alt="" /> </a>
            </figure>
            <figure>
                <a class="d-block mb-4" data-fancybox="images" href="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" data-caption="Nulla volutpat rhoncus"> <img class="img-fluid" src="{{ asset('html/images/gallery/doyinanddapowedding/777.jpg') }}" alt="" /> </a>
            </figure>
        </div>
    </div>
</div>
@endsection

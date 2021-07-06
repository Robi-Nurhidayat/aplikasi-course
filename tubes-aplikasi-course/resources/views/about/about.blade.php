@extends('layouts.app')

@section('content')

<div class="jumbotron mx-5 my-5 bg-light">
    <div class="container">
      <h1 class="display-4 text-center">ABOUT US</h1>
      <p class="lead mt-4" style="width: 100%;">ITCourse adalah sebuah website belajar secara daring atau online dengan menggunkan metode pembelajaran tentang pemrograman berupa sebuah video belajar dan user dapat memilih video belajar yang diinginkan.</p>
    </div>
</div>

{{-- why LearnIT --}}

<div class="jumbotron bg-dark mx-5 my-5">

    <div class="content-why">
        <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
            <div class="card-header text-center"><img src="{{ URL('images/waktu.jpg') }}" alt="" class="rounded"></div>
            <div class="card-body">
              <h5 class="card-title">Waktu Fleksibel</h5>
              <p class="card-text">Kelas permanen tanpa ada batas waktu</p>
            </div>
        </div>

        <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem;height:300px;">
            <div class="card-header text-center"><img src="{{ URL('images/uang.jpg') }}" alt="" class="rounded"></div>
            <div class="card-body">
              <h5 class="card-title">Biaya Yang Terjangkau</h5>
              <p class="card-text">Harga yang ditawarkan sangat bersahabat dengan dompet anda.</p>
            </div>
        </div>

        <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem;height:300px;">
            <div class="card-header text-center"><img src="{{ URL('images/mentor.jpg') }}" alt="" class="rounded"></div>
            <div class="card-body">
              <h5 class="card-title">Pengajar Professional</h5>
              <p class="card-text">Pengajar sudah professional di bidang nya</p>
            </div>
        </div>
    </div>
</div>


{{-- end of LearnIT --}}

{{-- our team --}}

<div class="jumbotron bg-dark mx-5 my-5">
    <div class="our-team">
        <div class="card mt-3" style="width: 18rem; height:80%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    
          <div class="card mt-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    
          <div class="card mt-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    
          <div class="card mt-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
    
</div>


{{-- end of our team --}}
    
@endsection
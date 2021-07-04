@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- Hero --}}
<div class="jumbotron bg-light mx-5 my-5">
    <div class="row">
        <div class="col-md-5">
            <h1>Learn Programming</h1>
            <h1 class="mb-4">Smart For Your Future</h1>

            <p class="lead mb-4">Belajar cerdas seputar programming bersama ITCourse dan dapatkan sertifikat untuk membangun masa depan anda yang lebih terarah</p>

            <a class="btn btn-primary btn-lg" href="#" role="button">Get started</a>   
            <a class="btn btn-secondary btn-lg ml-5" href="#" role="button">Course List</a>
        </div>

        <div class="col-md-6 ml-4 ">
            <img src="{{ URL('images/hero.jpg') }}" alt="">
        </div>
    </div>

</div>

{{-- end of Hero --}}


{{-- Card plan --}}
<div class="jumbotron mx-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-2 bg-dark text-white font-card1" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Save More <br>
                    With Good Plan </h5>
                  <p class="card-text">Kelas Premium mempunyai banyak benefits. Gabunglah Kelas Premium dengan metode belajar menggunakan studi kasus dan dapatkan sertifikat.</p>
                  <p>Untuk Awal yang baru coba memilih kelas gratis terlebih dahulu. Jika suka anda bisa upgrade ke kelas premium kapan saja.</p>
                </div>
                <img src="{{ URL('images/card1.jpg') }}" class="card-img-top px-3 pb-3" alt="...">
              </div>
        </div>

        <div class="col-md-4">
            <div class="card my-5 bg-secondary text-white" style="width: 20rem; height:90%;">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Free <br>What You’ll Get?</h5>
                  <p> Kesempatan belajar secara gratis</p>
                  <p>  Akses selama nya</p>
                  <p>  Ilmu yang bermanfaat</p>
                  <div class="text-center d-flex justify-content-center">
                    <a href="#" class="btn btn-primary">View Course List</a>
                  </div>
                  
                </div>
              </div>
        </div>

        <div class="col-md-4">
            <div class="card my-5 bg-secondary text-white" style="width: 20rem; height:90%;">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">Free <br>What You’ll Get?</h5>
                  <p> Kesempatan belajar secara gratis</p>
                  <p>  Akses selama nya</p>
                  <p>  Ilmu yang bermanfaat</p>
                  <div class="text-center d-flex justify-content-center">
                    <a href="#" class="btn btn-primary">View Course List</a>
                  </div>
                  
                </div>
              </div>
        </div>
    </div>    
</div>

{{-- end of card plan --}}

{{-- card popular course --}}

<div class="jumbotron bg-secondary mx-5 my-5">
    <h1 class="mx-3">Popular Course</h1>
    <p class="mx-3 font-weight-bold">Top Course Demand in 2021</p>
    <div class="row mx-2">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL('images/pi1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Python Basic</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL('images/JS.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>

        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL('images/react.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>

        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ URL('images/lara.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
</div>

{{-- end of popular course --}}

@endsection

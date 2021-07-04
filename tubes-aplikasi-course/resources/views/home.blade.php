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

<div class="jumbotron">
    <div class="row">
        <div class="col-md-5">
            <h1 class="display-4">Learn Programming Smart For Your Future</h1>
            <p class="lead">Belajar cerdas seputar programming bersama LearnEnt dan dapatkan sertifikat untuk membangun masa depan anda yang lebih terarah</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>   
        </div>

        <div class="col-md-6 ml-4 bg-primary">
            <p>test</p>
        </div>
    </div>

</div>


@endsection

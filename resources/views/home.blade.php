@extends('layouts.app')

@section('content')


   
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Hero title
          </h1>
          <h2 class="subtitle">
            Hero subtitle
          </h2>
        </div>
      </div>
    </section>

    <div class="columns">
        <img src="{{ asset('images/hero-1.png')}}" alt="" class="is-fullwidth">
    </div>

    <div class="columns">
        
        <img src="{{ asset('images/maiadeen-mean.png') }}" alt="">
    </div>

    <footer>
        @2017
    </footer>




{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

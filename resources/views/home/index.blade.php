@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')
  <div class="container-lg">
    <div class="row">
      <div class="col-12">
        <div class="home_page">
          <h4>Presto finirò il mio portfolio</h4>
          <p>Se nel frattempo vuoi dare un occhiata ai miei progetti clicca
            <a href="{{ route('projects.index') }}">
              QUI
            </a>
          </p>
        </div>
        <img src="" alt="">
      </div>
    </div>
  </div>
@endsection

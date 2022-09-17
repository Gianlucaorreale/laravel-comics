@extends('layouts.main')

@section('main-content')
  <div class="container">
      <section id="products">
          <h1>CURRENT SERIES</h1>
          <div class="row">
            @foreach($comics as $comics)
            <div class="card">
                <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                <h3>{{$comics['series']}}</h3>
            </div>
            @endforeach
          </div>
      </section>
  </div>
@endsection
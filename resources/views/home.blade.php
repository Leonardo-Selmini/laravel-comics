@extends('layout') 

@section('pageTitle')
DC | Welcome to DC
@endsection

@section('mainContent')
<main>
  <section id="jumbo">
    <img src="{{asset("img/jumbotron.jpg")}}" alt="jumbo img">
  </section>
  <section id="series">
    <div class="cs-container">
      <h2>CURRENT SERIES</h2>
    </div>
    <div class="flex">
      @foreach ($comics as $comic)  
        <div class="card">
          <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
          <h4>{{$comic["title"]}}</h4>
        </div>
      @endforeach
    </div>
  </section>
</main>
@endsection
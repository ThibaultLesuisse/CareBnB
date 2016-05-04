@extends('layout')

@section('content')




<div id="url" style="display: none">{{url('')}}</div>
  <div style="width:58%; height:100%; position: absolute;">
    {!! Mapper::render() !!}

  </div>
  <div style="padding-left:58%; margin-top:2%;overflow:auto; height:800px;">


  <h2 style="padding-left:2%;text-align:center;font-family:lato;">Selecteer uw hulpverlener</h2>
  <hr>
  <div class="containter fill">
@foreach($hulpverleners as $hulpverlener)

<div class="panel-primary" id="{{$hulpverlener->id}}">
  <div class="panel-heading">Afspraak maken met {{$hulpverlener->voornaam}}</div>
    <div class="panel-body">
      <div class="row">
      <img src="/assets/img/{{$hulpverlener->id}}.jpg" alt="foto" class="img-thumbnail col-md-2 col-lg-2" height="80px" width="60px">
      <div class="col-md-10 col-lg-10">
      Telefoonnummer:  {{$hulpverlener->telefoonnummer}}<br>
      Email:  {{$hulpverlener->email}}<br>
      Categorie:  {{$hulpverlener->categorie}}<br>
    </div>

  </div>
  <br>

    <a href="booking/calendar/{{$hulpverlener->id}} "  class="btn btn-default  col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">Maak afspraak</a>
  </div>
</div>
@endforeach
</div>
</div>

@endsection

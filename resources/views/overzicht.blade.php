@extends('layouts.app')

@section('content')




<div id="url" style="display: none">{{url('')}}</div>
  <div style="width:58%; height:100%; position: absolute;">
    {!! Mapper::render() !!}

  </div>
  <div style="padding-left:58%; margin-top:2%;">


  <h2 style="padding-left:2%;text-align:center;">Selecteer uw hulpverlener</h2>
  <hr>
@foreach($hulpverleners as $hulpverlener)
<div class="panel-default" >
  <div class="panel-heading">Afspraak maken met {{$hulpverlener->voornaam}}</div>
    <div class="panel-body">
      Telefoonnummer:  {{$hulpverlener->telefoonnummer}}<br>
      Email:  {{$hulpverlener->email}}<br>
      Categorie:  {{$hulpverlener->categorie}}<br>
    <a href="booking/calendar/{{$hulpverlener->id}} ">Maak afspraak</a>
  </div>
</div>
@endforeach
</div>

@endsection

@extends('layout')
@section('content')
<div class="row jumbotron text-center">
  <h1>Bevestig afspraak</h1>
</div>

<div class="row col-md-6 well center-block">
  <h1>Afspraak met {{ $appointmentInfo['hulpverlener_naam'] }}</h1>
  <h3 id="momentDate"></h3>
  <legend>Informatie hulpbehoevende</legend>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Telefoonnummer</th>
        <th>E-Mail</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $appointmentInfo['fname'] }} </td>
        <td>{{ $appointmentInfo['lname'] }} </td>
        <td>{{ $appointmentInfo['number'] }} </td>
        <td>{{ $appointmentInfo['email'] }} </td>
      </tr>
    </tbody>
  </table>

  <div class="text-center">
  <a href="confirmed" class="btn btn-primary">Bevestig afspraak</a>
  </div>

</div>

<script>
  $(document).ready(function() {
    mDate = moment({{ "'".Session::get('selection')."'" }});
    $('#momentDate').text("On " + mDate.format("MMMM Do, YYYY"));
  })
</script>
@stop

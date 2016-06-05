
@extends('angular')
@section('content')
<div ng-controller="KitchenSinkCtrl as vm">
  <div class="row jumbotron text-center">
      <h1>Afspraken</h1>
      <h2>Hier zijn al uw afspraken samengevoegd</h2>
    </div>

  <div class="row">

    <div class="col-md-6 text-center">
      <div class="btn-group">

        <button
          class="btn btn-primary"
          mwl-date-modifier
          date="vm.viewDate"
          decrement="vm.calendarView">
          Vorig
        </button>
        <button
          class="btn btn-default"
          mwl-date-modifier
          date="vm.viewDate"
          set-to-today>
          Vandaag
        </button>
        <button
          class="btn btn-primary"
          mwl-date-modifier
          date="vm.viewDate"
          increment="vm.calendarView">
          Volgend
        </button>
      </div>
    </div>

    <br class="visible-xs visible-sm">

    <div class="col-md-6 text-center">
      <div class="btn-group">
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'year'">Jaar</label>
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'month'">Maand</label>
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'week'">Week</label>
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'day'">Dag</label>
      </div>
    </div>

  </div>

  <br>
<div class="col-md-8 col-md-offset-2">
  <mwl-calendar
    events="vm.events"
    view="vm.calendarView"
    view-title="vm.calendarTitle"
    view-date="vm.viewDate"
    on-event-click="vm.eventClicked(calendarEvent)"
    on-event-times-changed="vm.eventTimesChanged(calendarEvent); calendarEvent.startsAt = calendarNewEventStart; calendarEvent.endsAt = calendarNewEventEnd"
    edit-event-html="'<i class=\'glyphicon glyphicon-pencil\'></i>'"
    delete-event-html="'<i class=\'glyphicon glyphicon-remove\'></i>'"
    on-edit-event-click="vm.eventEdited(calendarEvent)"
    on-delete-event-click="vm.eventDeleted(calendarEvent)"
    cell-is-open="vm.isCellOpen"
    day-view-start="06:00"
    day-view-end="22:00"
    day-view-split="30"
    cell-modifier="vm.modifyCell(calendarCell)">
  </mwl-calendar>

@endsection

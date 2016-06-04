  var geselecteerdEvent = 0;
  var token = $('meta[name="csrf-token"]').attr('content');
    var url = document.getElementById('url');
    url = url.textContent;
$(document).ready(function() {
  var url = document.getElementById('url');
  url = url.textContent;
  var cDate = new Date();


  // Calendar initialization
  $('#calendar').fullCalendar({
    editable: false,
    header: {
      left: 'prev,next today',
      center: 'Afspraken',
      right: 'month, agendaWeek, agendaDay'
    },
    defaultDate: cDate,
    defaultView: 'agendaWeek',
    // API call returns a json feed
    events: {
      url: url+'/api/get-all-appointments',
      error: function() {
        $('#error').html('Geen afspraken gevonden');
      }
    },

    // Function to handle a day click event
    dayClick: function(date, jsEvent, view) {
      //$(this).css('background-color', 'red');
    },

    // Function to handle an event click event
    eventClick: function(calEvent, jsEvent, view) {
      var detailView = $('#appointment-details');
      geselecteerdEvent = calEvent.id;
      $.get(url+"/api/get-appointment-info/"+calEvent.id,
        function(data) {
          var start = moment(calEvent.start).format('YYYY-MM-DD [at] h:mm a');
          var end = moment(calEvent.end).format('YYYY-MM-DD [at] h:mm a');
          var details = '<h3>'+calEvent.title+'</h3>' +
            '<p><b>Begins</b>: '+start+'</p>' +
            '<p><b>Ends</b>: '+end+'</p>' +
            '<p><a onclick="verwijderEvent()" class="btn btn-danger">Delete Appointment</a></p>';
          detailView.empty();
          detailView.append(details);
        });

    },
  });

});
function verwijderEvent(){
  var eventData = {
    _token: token,
    id: geselecteerdEvent
  };

  $.ajax({
    type: "POST",
    url: url+'/api/delete-appointment',
    data: eventData,
    success: function(data) {
      $('#calendar').fullCalendar('refetchEvents');
    alert("event succesvol verwijderd");
    },
    error: function(data) {
      console.log(data.responseText);
    },
    dataType: "json",
  });
}

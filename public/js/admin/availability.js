$(document).ready(function() {

  var url = document.getElementById('url');
  url = url.textContent;
  var cDate = new Date();
  var token = $('meta[name="csrf-token"]').attr('content');

  // Calendar initialization
  $('#calendar').fullCalendar({
    editable: false,
    theme: true,
    header: {
      left: 'Prev,Next Today',
      center: 'Afspraken',
      right: 'Month, AgendaWeek, AgendaDay'
    },
    defaultDate: cDate,
    defaultView: 'agendaWeek',
    events: {
     url: url+'/api/get-all-availability',
     success: function(e) {
     },
     error: function() {
      $('#error').html('Beschikbaarheid niet beschikbaar');
     }
    },
    selectable: true,
    select: function(start, end) {
      var title = confirm('Zeker van de beschikbaarheid om '+ start.toString() + ' Tot: '+ end.toString());
      var eventData;
      if (title) {

        eventData = {
          _token: token,
          start: start.format(),
          end: end.format(),
        };

        $.ajax({
          type: "POST",
          url: url+'/api/set-availability',
          data: eventData,
          success: function(data) {
            $('#calendar').fullCalendar('refetchEvents');
          },
          error: function(data) {
            alert(data.responseText);
          },
          dataType: "json",
        });
      }
    },
  });

  function refreshCalendar()
  {
    $('#calendar').fullCalendar('refetchEvents');
  }
});

@extends ( 'layout.layout' )

@section('custom-css')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" type="text/css">
    <style>
        .fc-prev-button,
        .fc-next-button {
            background-color: #55A79A!important;
            border: #55A79A!important;
        }
        .fc-toolbar-title,
        .fc-daygrid-day-number {
            color: #464646!important;
        }
    </style>
@endsection

@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        var ics = @json($sitedata->events, JSON_HEX_TAG);
        var events = [];

        $(ics).each(function(){
            events.push({
                'id': this.UID, 
                'title': this.SUMMARY,
                'start': this.DTSTART,
                'end': this.DTEND
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                displayEventEnd: true,
                eventTimeFormat: {
                    hour: 'numeric',
                    minute: '2-digit',
                    meridiem: 'short'
                },
                timeZone: 'PST',
                events: events
            });

            calendar.render();
        });
  
    </script>
@endsection

@section ( 'content' )
    <div class="row pr-3">
        <div class="col-md-12">
            <div id='calendar'></div>
        </div>
    </div>
@endsection
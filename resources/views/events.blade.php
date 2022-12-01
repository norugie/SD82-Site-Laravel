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

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
            });
            calendar.render();
        });
  
    </script>
@endsection

@section ( 'content' )
    <div class="row pr-3">
        <div class="col-md-3 col-sm-12">
            <h4 class="title-divider text-grey-dark">
                <span>All Upcoming Events</span>
            </h4>
            <ul class="list-unstyled">
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Nulla aliquam diam id lacus malesuada bibendum</a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Nam consectetur fringilla dapibus</a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Etiam nibh ligula, rutrum et purus vitae</a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Etiam dignissim, sapien ut dignissim faucibus</a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Pellentesque volutpat in nulla sit amet commodo</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div id='calendar'></div>
        </div>
    </div>
@endsection
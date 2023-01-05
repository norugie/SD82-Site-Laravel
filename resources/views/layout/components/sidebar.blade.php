<!--Sidebar-->
<div class="mb-4">
    <h4 class="title-divider text-grey-dark">
        <span>Recent News</span>
    </h4>
    <ul class="list-unstyled">
        @foreach($sitedata->posts as $post)
            <li class="mb-2">
                <p class="mb-0"><a href="/news/{{ $post->slug }}" class="d-flex align-items-center py-1 text-hover-no-underline">{{ $post->title }}</a></p>
                <ul class="list-inline text-grey-dark text-sm">
                    <li class="list-inline-item"><i class="fa fa-calendar"></i> {{ date( 'M d, Y',strtotime( $post->created_at ) ) }}</li>
                    <li class="list-inline-item"><i class="fa fa-user"></i> {{ $post->user->firstname }} {{ $post->user->lastname }}</li>
                </ul>
            </li>
        @endforeach
    </ul>
</div>
<hr class="w-50 mx-auto" />
<div class="mb-4">
    <h4 class="title-divider text-grey-dark">
        <span>Upcoming Events</span>
    </h4>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @foreach($sitedata->events as $event)
                    <div class="row d-md-flex mb-2 align-items-md-center text-primary">
                        <div class="col-md-3 d-flex align-items-center justify-content-md-center">
                            <span class="display-4 no-resize font-weight-bold mr-1">{{ Carbon\Carbon::parse($event->DTSTART)->format('d') }}</span>
                            <span class="text-sm text-uppercase">{{ Carbon\Carbon::parse($event->DTSTART)->format('M') }}<br />{{ Carbon\Carbon::parse($event->DTSTART)->format('Y') }}</span>
                        </div>
                        <div class="col-md-9 text-left my-auto">
                            <p class="mb-0 font-weight-bold">{{ $event->SUMMARY }}</p>
                            {{-- <p class="mb-0 op-8">10:00 AM - 1:00PM | Event Place</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<hr class="w-50 mx-auto" />
<div class="mb-4">
    <a class="weatherwidget-io" href="https://forecast7.com/en/54d52n128d60/terrace/" data-label_1="TERRACE" data-label_2="{{ date('g:i a, d M y') }}" data-days="3" >TERRACE WEATHER</a>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
</div>
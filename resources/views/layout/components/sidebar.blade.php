<!--Sidebar-->
<div class="mb-4">
    <h4 class="title-divider">
        <span>Recent News</span>
    </h4>
    <ul class="list-unstyled">
        @foreach($sitedata->posts as $post)
            <li>
                <a href="/news/{{ $post->slug }}" class="d-flex align-items-center py-1 text-hover-no-underline">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</div>

<div class="mb-4">
    <h4 class="title-divider">
        <span>Upcoming Events</span>
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
    </ul>
</div>

<div class="mb-4">
    <a class="weatherwidget-io" href="https://forecast7.com/en/54d52n128d60/terrace/" data-label_1="TERRACE" data-label_2="{{ date('g:i a, d M y') }}" data-days="3" >TERRACE WEATHER</a>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
</div>
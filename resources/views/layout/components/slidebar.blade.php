<div id="highlighted">
    <div class="mt-0 owl-nav-over owl-nav-over-lg owl-nav-over-hover" data-toggle="owl-carousel" data-owl-carousel-settings='{"items":1, "center":true, "autoplay":true, "autoplayTimeout":7000, "loop":true, "dots":true, "nav":true, "animateOut":"fadeOut"}'>
        @foreach($slides as $slide)
        <div class="item">
            <div class="item-image">
                <img src="/assets/img/banners/{{ $slide->banner }}" alt="{{ $slide->title }}" class="img-fluid" />
            </div>
            <div class="item-text container">
                <div class="item-content">
                    <div class="row">
                        <div class="col-lg-4 bg-light p-3 mx-4">
                            <div class="header">
                                <div class="header-brand">
                                    <div class="header-brand-text">
                                        <h1 class="h4">
                                            <span class="header-brand-text-alt">{{ $slide->title }}</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 pt-3">{{ $slide->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
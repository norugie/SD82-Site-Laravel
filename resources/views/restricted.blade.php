@extends ( 'layout.error' )

@section ( 'content' )
    <div class="row">
        <div class="col-md-12">
            <div class="w-90 mx-auto">
                <h3 class="text-grey-dark text-center text-uppercase font-weight-bold text-md-x2">
                    CMSD<span class="text-primary">82</span>
                </h3>
                <h2 class="error-code text-center text-xs-x6 text-md-x6 op-9">
                    403 <i class="fa fa-file text-primary text-xs-x6 text-md-x6"></i>
                </h2>
                <h2 class="error-message text-center text-xs-x3 text-md-x2">
                    This page is a restricted page.
                </h2>
                <p class="error-details text-center text-xs-x2">You do not have the required permission to access this page.</p>
            </div>
            <div class="text-center mt-1">
                <a href="/" class="mb-1 btn btn-xlg btn-outline-primary">Return to homepage</a>
            </div>
        </div>
    </div>
@endsection
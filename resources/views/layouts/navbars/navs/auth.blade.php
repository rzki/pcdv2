<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
    <div class="container-fluid ms-auto">
        {{-- <div class="navbar-wrapper">
            @if($activePage == 'dashboard')
            <p class="navbar-brand" href="#">Welcome, {{ auth()->user()->name }} !</p>
            @else
            <p class="navbar-brand" href="#">{{ $header }}</p>
            @endif
        </div> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
        </div>
    </div>
</nav>

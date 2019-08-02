<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
        @if(\Request::is('/'))
            @include('includes.filter')
        @endif
        @if(\Request::is('article/*'))
            <a href="/" id="btn-link" class="btn btn-primary active ml-auto" role="button">Back</a>
        @endif
    </header>

    <div id="main" class="row main-content">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<script type="text/javascript">
$(document).ready(function() {
    $('dropdown-toggle').dropdown();
});
</script>
</body>
</html>

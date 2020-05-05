<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
@include('partials._nav')
            <div class="content">
                @yield('content')
            </div>
        </div>
        </div>
 @include('partials._scripts')       
    </body>
</html>

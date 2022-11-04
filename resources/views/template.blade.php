<html>
    <head>
        @Vite(['resources/sass/app.scss','resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar">
            
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
        
    </body>
</html>
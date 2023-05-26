<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Panto-Monitor</title>

        <!-- Fonts -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito';
                background-image: url("/dist/img/photo5.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                
            }
        </style>
    </head>
    <body>
    
    
    <div class="d-flex align-items-center justify-content-center"  style="height: 750px;">


    <div class="card">
    <div class="card-header">
    <div class="d-flex align-items-center justify-content-center">
    <img src="{{asset('/dist/img/Logo.png') }}" alt="Logo">
    </<div>
        
    </div>
    </div>


    <div class="card-body">
    <h5 class="text-center">Welcome to PantoMonitor</h5>
    <p class="card-text">A Dashboard for daily Monitoring of Pantograph Carbon Strips</p>

    <div class="text-center" >
    @if (Route::has('login'))
                    @auth
                        <a  href="{{ url('/home') }}"  class="btn btn-primary" role="button" >Home</a>
                    @else
                        <a href="login" class="btn btn-success ">Login</a>
                        @if (Route::has('register'))
                            <a class="btn btn-primary" href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                
            @endif

    </<div>
    
</div>


    </div>






    

        
           
            </div>
            
    </body>
</html>

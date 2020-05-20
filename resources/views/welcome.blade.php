<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Kuepa Test Company</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .btn-whatsapp {
        display:block;
        width:70px;
        height:70px;
        color#fff;
        position: fixed;
        right:20px;
        bottom:20px;
        border-radius:50%;
        line-height:80px;
        text-align:center;
        z-index:999;
}

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <img src="/images/Kuepa.jpg">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                
                </div>
                <div class="btn-whatsapp">
<a href="https://api.whatsapp.com/send?phone=+573508084099&text=Hello%20Julian%20Jose%20Castellanos%20Uribe%20" target="_blank">
<img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
</a>
</div>
                <br><br>
                <div class="links">
                    <a href="https://co.linkedin.com/in/juli%C3%A1n-jos%C3%A9-castellanos-uribe-7763a2178">LinkedIn</a>
                    <a href="https://api.whatsapp.com/send?phone=+573508084099&text=Hello%20Julian%20Jose%20Castellanos%20Uribe%20">WhatsApp</a>
                    <a href="mailto:guitarrajulian@hotmail.com?subject=Julian%20Test%20Project%20GitHub!">Mail</a>
                    <a href="https://github.com/JULIAN4270">GitHub</a>
                    <a href="http://localhost:8000/TestDB">Reporte de Leads</a>
                    <a href="http://localhost:8000/RegistrarEstudiante">Registro de Estudiantes</a>
                </div>
                
                <img src="/images/Kuepa2.jpg">
            </div>

        </div>
      
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <div class="container bg-dark text-white text-center">©copyright Julian Jose Castellanos Uribe (Test develop)- Bogotá D.C. Colombia - 2020</div>

    </body>
</html>
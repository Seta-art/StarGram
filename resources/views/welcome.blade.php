<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StarGram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: white;
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
                color: blue;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
                border-bottom: 1px solid;     
                background: #CDFEAA;
            }
            .links > a:focus {
            color: yellow;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
.monBoutton {
    background-color: #007BFF;
    Color:white;
    font-weight: bold;
    padding: 10px 40px;
    width: 150px;
    line-height: 40px;
    border-radius: 3px;
    cursor: pointer; 
    box-shadow: 0 8px 16px 0 grey;
    text-decoration: none;
  }
  #foot {
position: absolute;
bottom: 0px;
text-align: center;
}

        </style>
    </head>
    <body>
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
                    StarGram
                </div>
               <div> InstaGram 2.0</div>
               <br>
               <br>
                <div class="links">
                @auth
                        <a href="{{ url('/home') }}" class="monBoutton">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="monBoutton">Se connecter</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="monBoutton">S'inscrire</a>
                        @endif
                    @endauth
                <a href="https://github.com/Seta-art/StarGram" class="monBoutton">GitHub</a>
                </div>
            </div>
        </div>
        <div id="foot">
        <p>© 2020 Stargram. </p>
    </div>
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Supervisor </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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

            .m-b-md {
                margin-bottom: 30px;
            }

           .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/shome') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                 <h3> <a href="{{route('logout.index')}}">Logout</a></h3>
                <div class="title m-b-md">
                    Supervisor
                </div>
                <h1>{{session('usname')}}</h1>
                <div class="links">

                   <div class="dropdown">
                       <a>Add</a>
                        <div class="dropdown-content">
                        <a href="{{route('doctor.create')}}">Doctor</a>
                        <a href="{{route('room.create')}}">Room</a>
                        <a href="{{route('receptionist.create')}}">Receptionist</a>
                        </div>
                    </div>

                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>

                    <div class="dropdown">
                        <a>Show</a>
                        <div class="dropdown-content">
                        <a href="{{route('doctor.showalltoSupervisor')}}">Doctor</a>
                        <a href="{{route('room.show')}}">Room</a>
                        <a href="{{route('receptionist.showalltoSupervisor')}}">Receptionist</a>
                        </div>
                    </div>

                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>
                    <div class="dropdown"></div>

                     <div class="dropdown">
                        <a>Profile</a>
                        <div class="dropdown-content">
                        <a href="{{route('supervisor.show',[session('usname')])}}">Your Profile</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </body>
</html>

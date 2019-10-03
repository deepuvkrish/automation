<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Jyothi Automation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap style sheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow-x:hidden;
            }

            @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
            @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);


            .body{
                position: absolute;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background-image: url(img/jec.jpg);
                background-size: cover;
                -webkit-filter: blur(5px);
                z-index: 0;
            }

            .grad{
                position: absolute;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
                z-index: 1;
                opacity: 0.7;
            }

            .header{
                top:150px;
                position: relative;
                top: calc(50% 0px);
                left: calc(50% 0px);
                z-index: 2;
            }
            .rowsy{
                position: relative;
                top: calc(50% 10px);
                left: calc(50% 0px);
                z-index: 2;
            }

            .header div{
                font-family: 'Exo', sans-serif;
                font-weight: 200;
                text-align: center;
                justify-content: center;
            }

            .header div span{
                color:#212c50 !important;
            }

            .login{
                position: relative;
                top: calc(50% 0px);
                left: calc(50% 0px); 
                height: 150px;
                width: 350px;
                padding: 10px;
                z-index: 2;
            }

            .login input[type=text]{
                width: 250px;
                height: 30px;
                background: transparent;
                border: 1px solid rgba(255,255,255,0.6);
                border-radius: 2px;
                color: #fff;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 4px;
            }

            .login input[type=password]{
                width: 250px;
                height: 30px;
                background: transparent;
                border: 1px solid rgba(255,255,255,0.6);
                border-radius: 2px;
                color: #fff;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 4px;
                margin-top: 10px;
            }

            .login input[type=submit]{
                width: 260px;
                height: 35px;
                background: #0892ca;
                border: 1px solid #094a8a;
                cursor: pointer;
                border-radius: 22px;
                color: #fbfbfb;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 6px;
                margin-top: 10px;
            }

            .login input[type=submit]:hover{
                opacity: 0.8;
            }

            .login input[type=submit]:active{
                opacity: 0.6;
            }

            .login input[type=text]:focus{
                outline: none;
                border: 1px solid rgba(255,255,255,0.9);
            }

            .login input[type=password]:focus{
                outline: none;
                border: 1px solid rgba(255,255,255,0.9);
            }

            .login input[type=submit]:focus{
                outline: none;
            }

            ::-webkit-input-placeholder{
            color: rgba(255,255,255,0.6);
            }

            ::-moz-input-placeholder{
            color: rgba(255,255,255,0.6);
            }
            .alert-danger {
                color: #ffb4c6;
                background-color: #f2dede;
                border-color: #ebccd1;
            }
            .alert {    
                font-size: 14px;
                position: relative;
                padding: 3.75px 4.25px;
                margin-bottom: 0rem;
                border: 1px solid transparent;
                border-radius: 0.25rem;
            }
            @media (min-width: 768px)
                footer.sticky-footer {
                    width: calc(100% - 225px);
                }
                footer.sticky-footer {
                    color: #fff;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    position: fixed;
                    right: 0;
                    bottom: 0;
                    width: calc(100% - 0px);
                    height: 30px;
                    background-color: #064a54;
                }
        </style>
    </head>
    <body>
    <div class="body"></div>
	<div class="grad"></div>
    <div class="container">
        <div class="row rowsy">
            <div class="col-8"> <!-- Notifications -->
                Notifications
            </div>
            <div class="col-4">    <!-- Log In Form-->            
                <div class="header">

                    <div class="col">
                        <div class="row">
                            <div style="font-size:29px;color: #fff;">Jyothi<span>Automation </span></div>
                        </div>
                        <div class="row">
                            <div class="login">

                                @if(isset(Auth::user()->email))
                                    <script>window.location="/index";</script>
                                @endif

                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{ $message }}</strong>
                                </div>

                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif    
                            
                                <form action="{{url('/main/checklogin')}}" method="post" autocomplete="off">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" placeholder="use jecc format only" name="email" id="email" autocomplete="off"><br>
                                    <input type="password" placeholder="password" name="password" id="password" autocomplete="off"><br>

                                    <input type="submit" name="login" id="login" value="login">
                                    <br>
                                    <a href="redirect/" style="color:red">Login with Google</a> 
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('/include/footer')



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

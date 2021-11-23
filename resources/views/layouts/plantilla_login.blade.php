<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
            <img src="{{asset('images/Captura.PNG')}}" width="150px" height="auto" style="padding: 10px"/>
            </div>

            <!-- Login Form -->
        <form method="GET" action="/validarLogin">
                {{ csrf_field() }}
                <input type="text" id="correo" class="fadeIn second" name="username" placeholder="Correo Electronico">
                <input type="text" id="contrasena" class="fadeIn third" name="password" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
            <div>
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                {{link_to('PerfilDeUsuario', $title = "Registrate", $attributes = array("class"=>"fadeIn fourth"), $secure = null)}}	&nbsp;&nbsp;&nbsp;
                <a class="fadeIn fourth" href="index_buena_pizza">Volver al Menu</a>
            </div>

        </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>



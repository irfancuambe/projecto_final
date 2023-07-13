<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIGEUnisave</title>
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="{{Route('login.autenticacao')}}" method="post">
        @csrf()
        <h3 class="text-center Panel-table" style="color:#7e7e7e"><b>Sistema de Gestão de Estágios da Unisave</b></h3> 
        <hr class="btn-primary">
        <div align="center">
                    <p class="clearfix">
                        <img src="{{asset('assets/pics/logotipo.png')}}" class="img-responsive" id="logo" alt="responsive image">
                    </p>
                    </div>
        <p class="clearfix" style="color:red">@error('error') {{$message}} @enderror</p>     
        <div class="form-group">
            <input type="text" name="code" class="form-control" placeholder="Código">
            @error('code') <span style="color: red;">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Senha">
            @error('password') <span style="color:red;">{{$message}}</span> @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Autenticar</button>
        </div>
        <div class="clearfix">
            
            <a href="#" class="pull-right">Esqueci a senha</a>
        </div>        
    </form>
</div>
</body>
</html>                                		                            
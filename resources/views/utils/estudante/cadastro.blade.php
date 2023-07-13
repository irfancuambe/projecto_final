
@include('utils.header')
@if($errors->all())
        @foreach($errors-> all() as $erros)
            {{$erros}}
        @endforeach
    @endif
<div class="content-body">
    <div class="container-fluid">
        <div class="card">
        <div style="color: #fcb444;">
    				<h1 align="center">Cadastro de estudantes </h1>

 				</div>
            <div class="card-body">
                <form action="{{Route('estudante.cadastro')}}"method="post">
                    @csrf()
                   
                    <div class="row">
                        <div class="col-md-4">
                           
                                <label for="1" class="text-labe">Curso</label>
                                <select name="course_id" id="1" class="form-control">
                                    <option selected></option>
                                    @foreach($ad as $ad)
                                    <option value="{{$ad->id}}">{{$ad->name}}</option>
                                    @endforeach
                                </select>
                        </div>
            
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="cod_estudante">Codigo</label>
                                <input class="form-control" id="cod_estudante" required type="text" name="code" placeholder="Ensira o código do estudante" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputNome">Nome</label>
                                <input class="form-control" id="inputNome" required type="text" name="name" placeholder="Ensira o nome do estudante" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstContacto">Contacto</label>
                                <input class="form-control" id="inputContacto" required type="text" name="contact" placeholder="Ensira o contacto do estudante" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputEmail">Email</label>
                                <input class="form-control" id="inputEmail" required type="email" name="email" placeholder="Ensira o email do estudante" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputEmail">Nivel de Acesso</label>
                                <input class="form-control" id="inputNivel de Acesso" required type="name" name="access_level" placeholder="Ensira o acessso do estudante" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" required type="text" name="password" placeholder="Ensira o passwor do estudante" />
                            </div>
                            <br>
                            <center><button class=" btn btn-primary">Enviar</button> <center> 
                        </div>
                        
                    </div>
                    
                        
                <form>
            </div>
       
        </div>
    </div>
   
</div>

@include('utils.footer')

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
                        <h1 align="center">Cadastro de Supervisor </h1>

                <div class="card-body">
                    <form action="{{Route('super.cadastro')}}"method="post">
                        @csrf()
                        
                        <div class="row">
                            <div class="col-md-4">
                                <label for="1" class="text-labe">Curso</label>
                                <select name="course_id" id="1" class="form-control">
                                    <option selected></option>
                                    @foreach($curso as $curso)
                                    <option value="{{$curso->id}}">{{$curso->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="cod_estudante">Codigo</label>
                                    <input class="form-control" id="Codigo" required type="text" name="code" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputNome">Nome</label>
                                    <input class="form-control" id="inputNome" required type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputFirstContacto">Contacto</label>
                                    <input class="form-control" id="inputContacto" required type="text" name="contact" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputEmail">Email</label>
                                    <input class="form-control" id="inputEmail" required type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputEmail">Nivel de Acesso</label>
                                    <input class="form-control" id="inputNivel de Acesso" required type="name" name="access_level">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputPassword">Password</label>
                                    <input class="form-control" id="inputPassword" required type="text" name="password">
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
</div>

@include('utils.footer')
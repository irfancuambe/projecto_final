@include('utils.header')

<div class="content-body">
    <div class="container-fluid">
    
        <div class="card">
            <div class="card-body">
                <form action=""method="">
                    @csrf()
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="cod_estudante">Codigo</label>
                                <input class="form-control" id="cod_estudante" required type="text" name="cod_student" placeholder="Ensira o codigo do estudante"value="{{$resultado->cod_student}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="cod_estudante">Curso</label>
                                <input class="form-control" id="cod_estudante" required type="text" name="cod_student" value="{{$resultado->Courses->name}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputNome">Nome</label>
                                <input class="form-control" id="inputNome" required type="text" name="name" placeholder="Ensira o nome do estudante" value="{{$resultado->name}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstContacto">Contacto</label>
                                <input class="form-control" id="inputContacto" required type="text" name="contact" placeholder="Ensira o contacto do estudante"value="{{$resultado->contact}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputEmail">Email</label>
                                <input class="form-control" id="inputEmail" required type="text" name="email" placeholder="Ensira o email do estudante" value="{{$resultado->email}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" required type="text" name="password" placeholder="Ensira o passwor do estudante" value="{{$resultado->password}}" />
                            </div>
                            <br>
                            <center><a href="{{Route('estudante.index')}}" class=" btn btn-primary">Fechar</a> <center> 
                        </div>
                        
                    </div>
                    
                        
                <form>
            </div>
       
        </div>
    </div>
   
</div>

@include('utils.footer')


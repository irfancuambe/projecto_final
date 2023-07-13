@include('utils.header')

<div class="content-body">
    <div class="container-fluid">
    
        <div class="card">
            <div class="card-body">
                <form action=""method="">
                
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="cod_estudante">Código</label>
                                <input class="form-control" id="cod_estudante" required type="text" name="code" placeholder="Ensira o codigo do estudante"value="{{$resultado->code}}" />
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
                                <input class="form-control" id="inputEmail" required type="password" name="email" placeholder="Sem dados" value="{{$resultado->email}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" required type="password" name="password" placeholder="Ensira o passwor do estudante" value="{{$resultado->password}}" />
                            </div>
                            <br>
                            <center>
                                <a class=" btn btn-primary"  href="{{Route('estudante.index')}}" >Fechar</a>
                                <a class="btn btn-success" href="{{Route('relatorio.filtro', $resultado -> id)}}">Gerar Relatório</a>
                            <center> 
                        </div>
                        
                    </div>
                    
                        
                <form>
            </div>
       
        </div>
    </div>
   
</div>

@include('utils.footer')


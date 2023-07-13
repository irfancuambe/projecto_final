@include('utils.header')


<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div style="color: #fcb444;">
                        <h1 align="center">Eliminação de estudantes </h1>
                        
                <div class="card-body">
                    <form action="{{Route('super.update', $resultado->id)}}"method="post">
                        @csrf()
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                    <label for="1" class="text-labe">Curso</label>
                                    <select name="course_id" id="1" class="form-control">
                                        <option >{{$resultado->Courses->name}}</option>
                                        @foreach($ad as $ad)
                                        <option value="{{$ad->id}}">{{$ad->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputCodigo">Codigo de Supervisor</label>
                                    <input class="form-control" id="inputCodigo de Supervisor" required type="text" name="code" placeholder="Sem dados"value="{{$resultado->code}}" />
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
                                    <input class="form-control" id="inputEmail" required type="password" name="email" placeholder="Ensira o email do estudante" value="{{$resultado->email}}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputPassword">Password</label>
                                    <input class="form-control" id="inputPassword" required type="password" name="password" placeholder="Ensira o passwor do estudante" value="{{$resultado->password}}" />
                                </div>
                                <br>
                                <center><button type= "submit"class=" btn btn-primary">Atualizar</button> <center> 
                            </div>
                            
                        </div>
                        
                            
                    <form>
                </div>
        
            </div>
        </div>
    </div>
   
</div>

@include('utils.footer')


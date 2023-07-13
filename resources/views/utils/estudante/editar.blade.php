
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
    				<h1 align="center">Atualização de estudantes </h1>

 				</div>
            <div class="card-body">
                <form action="{{Route('estudante.update', $resultado->id)}}"method="post">
                    @csrf()
                    @method('PUT')
                   
                    <div class="row">
                        <div class="col-md-4">
                           
                                <label for="1" class="text-labe">Curso</label>
                                <select name="course_id" id="1" class="form-control">
                                    <option selected>{{$resultado-> course_id}}</option>
                                    @foreach($ad as $ad)
                                    <option value="{{$ad->id}}">{{$ad->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col-md-4">
                       
                            <label for="1" class="text-labe">Nivel de Acesso</label>
                            <input class="form-control" id="cod_estudante" required type="text" name="access_level" value="{{$resultado-> access_level}}">
                         
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="cod_estudante">Codigo</label>
                                <input class="form-control" id="cod_estudante" readonly required type="text" name="code" value="{{$resultado-> code}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputNome">Nome</label>
                                <input class="form-control" id="inputNome" required type="text" name="name" value="{{$resultado-> name}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstContacto">Contacto</label>
                                <input class="form-control" id="inputContacto" required type="text" name="contact" value="{{$resultado-> contact}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputEmail">Email</label>
                                <input class="form-control" id="inputEmail" readonly type="password"placeholder="Sem dados" name="email" value="{{$resultado->email}}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" readonly  type="password"placeholder="Sem dados" name="password" value="{{$resultado->password}}">
                            </div>
                            <br>
                            <center><button class=" btn btn-primary">Salvar</button> <center> 
                        </div>
                        
                    </div>
                    
                        
                <form>
            </div>
       
        </div>
    </div>
   
</div>

@include('utils.footer')
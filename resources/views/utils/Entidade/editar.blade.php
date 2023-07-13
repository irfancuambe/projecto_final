
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
                <h1 align="center">Atualização de Entidades </h1>

                <div class="card-body">
                    <form action="{{Route('entidade.update', $resultado->id)}}"method="post">
                        @csrf()
                        @method('PUT')
                    
                        <div class="row">
                           
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="cod_estudante">Nome</label>
                                    <input class="form-control" id="cod_estudante" required type="text" name="name" value="{{$resultado-> name}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputNome">Atuação</label>
                                    <input class="form-control" id="inputNome" required type="text" name="operation_area" value="{{$resultado-> operation_area}}">
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
                                    <input class="form-control" id="inputEmail" type="password"placeholder="Sem dados" name="email" value="{{$resultado->email}}">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <br>
                                <center><button class=" btn btn-primary">Salvar</button> <center> 
                            </div>
                            
                        </div>
                        
                            
                    <form>
                </div>
            </div>
        </div>
    </div>
   
</div>

@include('utils.footer')
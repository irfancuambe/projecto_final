
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
    				<h1 align="center">Atualização de cursos </h1>

 				</div>
            <div class="card-body">
                <form action="{{Route('curso.update',$resultado->id)}}"method="post">
                    @csrf()
                    @method('PUT')
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="curso">Nome</label>
                                    <input class="form-control" id="curso" required type="text" name="name"value="{{$resultado->name}}">
                                </div>
                            </div> <br>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <div class="col-md-6">
                                        <br> <br>
                                        <div class="form-floating mb-3">
                                        <textarea name="description" class="form-control" placeholder="Descrição" id="floatingTextarea" style="height: 100px;">{{$resultado->description}}</textarea>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            
                                <br>
                                <center><button class=" btn btn-primary">Salvar</button> <center> 
                            </div>
                        </div>  
                        
                       
                        
                    </div>
                    
                        
                <form>
            </div>
       
        </div>
    </div>
   
</div>

@include('utils.footer')
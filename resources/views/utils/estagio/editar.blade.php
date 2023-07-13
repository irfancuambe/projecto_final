@include('utils.header')


<div class="content-body">
    <div class="container-fluid">
        <div class="card">
        <div style="color: #fcb444;">
    				<h1 align="center">Eliminação de estagios </h1>
					
 				</div>
            <div class="card-body">
                <form action="{{Route('estagio.update', $resultado->id)}}"method="post">
                    @csrf()
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="place">Estudante</label>
                                <select name="student_id" id="2" class="form-control">
                                    <option selected>{{$resultado->student_id}}</option>
                                    @foreach($estudante as $estudante)
                                      <option value="{{$estudante->id}}">{{$estudante->name}}</option>
                                    @endforeach
            
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Supervisor</label>
                                <select name="supervisor_id" id="2" class="form-control">
                                    <option selected>{{$resultado->supervisor_id}}</option>
                                    @foreach($super1 as $super1)
                                      <option value="{{$super1->id}}">{{$super1->name}}</option>
                                    @endforeach
            
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Entidade</label>
                                <select name="entitie_id" id="2" class="form-control">
                                    <option selected>{{$resultado->entitie_id}}</option>
                                    @foreach($empresa as $empresa)
                                      <option value="{{$empresa->id}}">{{$empresa->name}}</option>
                                    @endforeach
            
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Curso</label>
                                <select name="course_id" id="2" class="form-control">
                                    <option selected>{{$resultado->course_id}}</option>
                                    @foreach($curso as $curso)
                                      <option value="{{$curso->id}}">{{$curso->name}}</option>
                                    @endforeach
            
                                  </select>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="place">Cidade</label>
                                <input class="form-control" id="place" required type="string" name="place" placeholder="Ensira o local do estagio"value="{{$resultado->place}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Inicio</label>
                                <input class="form-control" id="inputInicio" required type="date" name="start_date" placeholder="Ensira a data do inicio" value="{{$resultado->start_date}}"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstFim">Fim</label>
                                <input class="form-control" id="inputFim" required type="date" name="end_date" placeholder="Ensira o a data final"value="{{$resultado->end_date}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-floating mb-3 mb-md-0">
                                    <label for="inputInicio">Estado</label>
                                    <select name="status" id="2" class="form-control">
                                        <option selected>{{$resultado->status}}</option>
                                        <option value="Pendente"><span style="color: orange;">Pendente</span></option>
                                        <option value="Em andamento"><span style="color: blue;">Em andamento</span></option>
                                        <option value="Concluído"><span style="color: green;">Concluído</span></option>
                                        <option value="Cancelado"><span style="color: red;">Cancelado</span></option>

                                    </select>
                                </div>
                            </div> 
                        <div class="col-md-12">
                            </div>
                                <br>
                                <center><button type= "submit"class=" btn btn-primary">Atualizar</button> <center> 
                            </div>
                        </div>

                        
                    </div>
                    
                        
                <form>
            </div>
       
        </div>
    </div>
   
</div>

@include('utils.footer')


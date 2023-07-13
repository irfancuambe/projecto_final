@include('utils.header')

<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div style="color: #fcb444;">
                <h1 align="center">Visualização de estagios </h1>
            </div>
            <div class="card-body">
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="place">Estudante</label>
                                <select name="student_id" id="2" class="form-control">
                                    <option selected>{{$resultado->student_id}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="place">Supervisor</label>
                                <select name="supervisor_id" id="2" class="form-control">
                                    <option selected>{{$resultado->supervisor_id}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Entidade</label>
                                <select name="entitie_id" id="2" class="form-control">
                                    <option selected>{{$resultado->entitie_id}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Curso</label>
                                <select name="course_id" id="2" class="form-control">
                                    <option selected>{{$resultado->course_id}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="place">Cidade</label>
                                <input class="form-control" id="place" required type="string" name="place" placeholder="Ensira o local do estagio" value="{{$resultado->place}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputInicio">Inicio</label>
                                <input class="form-control" id="inputInicio" required type="date" name="start_date" placeholder="Ensira a data do inicio" value="{{$resultado->start_date}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputFirstFim">Fim</label>
                                <input class="form-control" id="inputFim" required type="date" name="end_date" placeholder="Ensira o a data final" value="{{$resultado->end_date}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputEstado">Estado</label>
                                <input class="form-control" id="inputEstado" required type="string" name="status" placeholder="Ensira o estado do estagio" value="{{$resultado->status}}" />
                            </div>
                        </div>
                            <br>
                            <center>
                             <a href="{{ Route('estagio.index') }}" class="btn btn-primary">Fechar</a>
                            <center> 
                        </div>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('utils.footer')

@include('utils.header')

<div class="container-fluid">
    <div class="row-fluid">
        <div class="col col-lg-H col-md-H col-sm-H haggy">
            <div class="col-md-12">
                <div style="color: #fcb444;">
                    <h1 align="center">Gestão de estágios </h1>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{Route('estagio.enviar')}}">Adicionar</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table primary-table-bordered">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Estudante</th>
                                        <th scope="col">Curso</th>
                                        <th scope="col">Supervisor</th>
                                        <th scope="col">Entidade</th>
                                        <th scope="col">Local</th>
                                        <th scope="col">Início</th>
                                        <th scope="col">Fim</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($internship1 as $internship)
                                    <tr>
                                        <th>{{$internship->id}}</th>
                                        <th>{{$internship->student_id}}</th>
                                        <th>{{$internship->course_id}}</th>
                                        <th>{{$internship->supervisor_id}}</th>
                                        <th>{{$internship->entitie_id}}</th>
                                        <th>{{$internship->place}}</th>
                                        <th>{{$internship->start_date}}</th>
                                        <th>{{$internship->end_date}}</th>
                                        <th>
                                            @if($internship->status == 'Em andamento')
                                            <span style="color: white; border: 2px solid blue; border-radius: 5px; padding: 5px;background: blue;">
                                                {{$internship->status}}
                                            </span>
                                            @elseif($internship->status == 'Pendente')
                                            <span style="color: white; border: 2px solid orange; border-radius: 5px; padding: 5px;background: orange;">
                                                {{$internship->status}}
                                            </span>
                                            @elseif($internship->status == 'Concluído')
                                            <span style="color: white; border: 2px solid green; border-radius: 5px; padding: 5px;background: green;">
                                                {{$internship->status}}
                                            </span>
                                            @elseif($internship->status == 'Cancelado')
                                            <span style="color: white; border: 2px solid red; border-radius: 5px; padding: 5px;background: red;">
                                                {{$internship->status}}
                                            </span>
                                            @else
                                            <span>{{$internship->status}}</span>
                                            @endif
                                        </th>
                                        </th>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{Route('estagio.view', $internship->id)}}">Detalhe</a>-
                                            <a class="btn btn-sm btn-info" href="{{Route('estagio.editar', $internship->id)}}">Editar</a>
                                            <a class="btn btn-sm btn-danger" href="{{Route('estagio.delete', $internship->id)}}">Apagar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                     $('.table').DataTable();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@include('utils.footer')

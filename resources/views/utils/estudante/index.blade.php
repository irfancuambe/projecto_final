@include('utils.header')

<div class="container-fluid" >
    <div class="row-fluid">
		<div class="col col-lg-H col-md-H col-sm-H haggy">
        
			<div class=" col-md-12">
               	<div style="color: #fcb444;">
    				<h1 align="center">Gestão de estudantes </h1>
					
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                        
                            <li class="breadcrumb-item active"><a href="{{Route('estudante.enviar')}}">Adicionar</a></li>
                            <li class="breadcrumb-item active" ><a href="{{Route('gerar.relatorio')}}">Gerar Relatório</a></li>
                        </ol>
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
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Codigo de Estudante</th>
                                                    <th scope="col">Curso</th>
                                                    <th scope="col">Contacto</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Açao</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($student1 as $student)
                                                    <tr>
                                                        <th>{{$student-> id}}</th>
                                                        <th>{{$student-> name}}</th>
                                                        <th>{{$student-> code}}</th>
                                                        <th>{{$student-> Courses->name}}</th>
                                                        <th>{{$student-> contact}}</th>
                                                        <th>{{$student-> email}}</th>
                                                        <td> <a class="btn btn-sm btn-info" href="{{Route('estudante.detalhe', $student -> id)}}">Detalhe</a>-
                                                        <a class="btn btn-sm btn-info"href="{{Route('estudante.editar', $student -> id)}}">Editar</a>
                                                            <a class="btn btn-sm btn-danger" href="{{Route('estudante.delete', $student -> id)}}">Apagar</a>
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
</div>
        

       
@include('utils.footer');



        

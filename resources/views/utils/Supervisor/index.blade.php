@include('utils.header')

<div class="container-fluid" >
    <div class="row-fluid">
		<div class="col col-lg-H col-md-H col-sm-H haggy">
        
     
			<div class=" col-md-12">
               	<div style="color: #fcb444;">
    				<h1 align="center">Gestão de Supervisores </h1>
					 
                    <div class="col-sm-2 p-md-0 justify-content-sm-end mt-4 mt-sm-0 d-flex">

                        <a class="btn btn-sm btn-info" href="{{Route('super.enviar')}}">Adicionar</a></li>
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
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Codigo de Supervisor</th>
                                                    <th scope="col">Curso</th>
                                                    <th scope="col">Contacto</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Açao</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($Super1 as $super1)
                                                    <tr>
                                                        <th>{{$super1-> id}}</th>
                                                        <th>{{$super1-> name}}</th>
                                                        <th>{{$super1-> code}}</th>
                                                        <th>{{$super1-> Courses->name}}</th>
                                                        <th>{{$super1-> contact}}</th>
                                                        <th>{{$super1-> email}}</th>
                                                        <td> 
                                                            <a class="btn btn-sm btn-info"href="{{Route('super.editar', $super1 -> id)}}">Editar</a>-
                                                            <a class="btn btn-sm btn-danger" href="{{Route('super.delete', $super1 -> id)}}">Apagar</a>
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



        

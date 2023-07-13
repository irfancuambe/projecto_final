@include('utils.header')

<div class="container-fluid" >
    <div class="row-fluid">
		<div class="col col-lg-H col-md-H col-sm-H haggy">
        
     
			<div class=" col-md-12">
               	<div style="color: #fcb444;">
				<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <b>@error('sem_acesso') <span style="color: red;">{{$message}}</span>@enderror</b>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    				<h1 align="center">Sistema de Gestão de Estágios da Unisave</h1>
				<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <b>@error('sem_acesso') <span style="color: red;">{{$message}}</span>@enderror</b>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
					
    				<hr>
						<h1>Olá @if(auth()->check()){{auth()->user()->name}}@endif <br> Bem vindo SIG Unisave</h1>
					 <hr>
 				</div>
            </div>
        </div>
    </div>
</div>
        
            
            


@include('utils.footer')



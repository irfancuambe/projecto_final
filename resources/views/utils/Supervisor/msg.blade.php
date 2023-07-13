@include('utils.header')
<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="content-body">
                    <div class="container-fluid">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">     
                            <div class="card-header bg-success text-white">Casdastro completo</div>
                            <div class="card-body">
                                <b> <h4>Supervisor cadastrado com sucesso!</h4></b></br></br>
                                <a href="{{Route('super.index')}}" class="btn btn-sm btn-primary">Visualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('utils.footer')
@include('utils.header')
<div class="content-body">
    <div class="container-fluid"> 
        <div class="card">
            <div class="card-header bg-success text-white">Remoção completa</div>
            <div class="card-body">
                <b> Dados Eliminados com sucesso!</b></br></br>
                <a href="{{Route('super.index')}}" class="btn btn-sm btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
</div>

@include('utils.footer')
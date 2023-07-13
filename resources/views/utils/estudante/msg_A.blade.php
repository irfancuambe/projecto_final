@include('utils.header')

<div style="color: #fcb444;">
<h1 align="center">Atualização de dados</h1>
</div>			
        <div class="content-body">
        <div class="container-fluid"> 
            <div class="card">
                <div class="card-header bg-success text-white">Atualização completa</div>
                    <b> Dados atualizados com sucesso!</b></br></br>
                    <a href="{{Route('estudante.index')}}" class="btn btn-sm btn-primary">Visualizar</a>
                </div>
            </div>
         
        </div>
    </div>
</div>




@include('utils.footer')
<nav class="navbar-inverse" onload="">
    <div class="row-fluid">
        <div class="panel navbar with-nav-tabs navbar-fixed-top">
            <div class="panel-heading" style="background-color: #0c4c9c;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php"><span style="color: #fff; font-size: 19px; "><label>SIGEUnisave</label></span></a>
                </div>
                <div id="navbar-collapse" class="collapse navbar-collapse justify-content-start">
                    <ul class="nav navbar-nav">
                        <!-- Outros itens de navegação aqui -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item hidden"><a href="#" style="color: #fff; font-size:18px" class="nav-link messages"><i class="fa fa-envelope"> </i> <span class="badge"></span></a></li>
                        <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" style="color: #fcb444; font-size:18px; background: transparent;" class="nav-link dropdown-toggle user-action">{{ auth()->user()->name }} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="" style="color: #000;" class="dropdown-item" data-toggle="modal"><i class="fa fa-user fa-fw" data-toggle="tooltip" title="Usuario"></i> Perfil</a></li>
                                <li><a href="" style="color: #000;" class="dropdown-item" data-toggle="modal"><i class="fa fa-cog fa-fw" data-toggle="tooltip" title="Alterar senha"></i> Alterar Senha</a></li>
                                <li class="divider dropdown-divider"></li>
                                <li><a href="{{route('logout')}}" class="dropdown-item" style="color: red;"><i class="fa fa-sign-out-alt fa-fw"></i> Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<script type="text/javascript">
    /*if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }*/
</script>

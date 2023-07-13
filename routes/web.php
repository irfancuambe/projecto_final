<?php

use App\Http\Controllers\CursoControle;
use App\Http\Controllers\EntidadeControle;
use App\Http\Controllers\Estagio_Controle;
use App\Http\Controllers\Estudante_Controle;
use App\Http\Controllers\LoginControle;
use App\Http\Controllers\PdfControle;
use App\Http\Controllers\Principal;
use App\Http\Controllers\SuperControle;
use App\Http\Middleware\AccessLevelMiddleware;
use Illuminate\Support\Facades\Route;




//========================= Autenticação de Login ========================================
Route::get('/', [LoginControle::class,'index'])-> name('login');
Route::post('/autenticacao', [LoginControle::class,'autenticacao'])-> name('login.autenticacao');

Route::middleware('restringir')->group(function () {
    Route::get('/Logout', [LoginControle::class,'logout'])-> name('logout');

    Route::get('/home',[Principal::class,'home'])->name('home');
    
    //==============================================================================================
    Route::get('/cadastro', [Estudante_Controle::class,'enviar'])->name('estudante.enviar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estudante', [Estudante_Controle::class,'index'])->name('estudante.index')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estudante/detalhe/{id}', [Estudante_Controle::class,'detalhe'])->name('estudante.detalhe')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estudante/editar/{id}', [Estudante_Controle::class,'editar'])->name('estudante.editar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estudante/modificar1/{id}', [Estudante_Controle::class,'modificar1'])->name('estudante.modificar1')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estudante/delete/{id}', [Estudante_Controle::class,'delete'])->name('estudante.delete')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::put('/estudante/modificar/{id}', [Estudante_Controle::class,'update'])->name('estudante.update')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::post('/estudante/cadastro', [Estudante_Controle::class,'cadastro'])->name('estudante.cadastro')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/msg', [Estudante_Controle::class,'msg'])->name('estudante.msg')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/msg_A', [Estudante_Controle::class,'msg_A'])->name('estudante.msg_A')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/msg_D', [Estudante_Controle::class,'msg_D'])->name('estudante.msg_D')->middleware(AccessLevelMiddleware::class . ':admin');

    // -==============================================================================-


    // -============================== Curso       ================================================-

    Route::get('/Curso', [CursoControle::class,'index'])->name('curso.index')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::post('/Curso/cadastro', [CursoControle::class,'cadastro'])->name('curso.cadastro')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Curso/cadastro', [CursoControle::class,'enviar'])->name('curso.enviar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Curso/view/{id}', [CursoControle::class,'view'])->name('curso.view')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Curso/editar/{id}', [CursoControle::class,'editar'])->name('curso.editar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Curso/delete/{id}', [CursoControle::class,'delete'])->name('curso.delete')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::put('/Curso/modificar/{id}', [CursoControle::class,'update'])->name('curso.update')->middleware(AccessLevelMiddleware::class . ':admin');

    Route::get('/Curso/msg', [CursoControle::class,'msg'])->name('curso.msg')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Curso/msg_A', [CursoControle::class,'msg_A'])->name('curso.msg_A')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Curso/msg_D', [CursoControle::class,'msg_D'])->name('curso.msg_D')->middleware(AccessLevelMiddleware::class . ':admin');
    // -==============================================================================-

    Route::get('/estagio/cadastro', [Estagio_Controle::class,'enviar'])->name('estagio.enviar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio', [Estagio_Controle::class,'index'])->name('estagio.index')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio/view/{id}', [Estagio_Controle::class,'view'])->name('estagio.view')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio/editar/{id}', [Estagio_Controle::class,'editar'])->name('estagio.editar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio/delete/{id}', [Estagio_Controle::class,'delete'])->name('estagio.delete')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::put('/estagio/modificar/{id}', [Estagio_Controle::class,'update'])->name('estagio.update')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::post('/estagio/cadastro', [Estagio_Controle::class,'cadastro'])->name('estagio.cadastro')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio/msg', [Estagio_Controle::class,'msg'])->name('estagio.msg')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio/msg_A', [Estagio_Controle::class,'msg_A'])->name('estagio.msg_A')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/estagio/msg_D', [Estagio_Controle::class,'msg_D'])->name('estagio.msg_D')->middleware(AccessLevelMiddleware::class . ':admin');
    // -==============================================================================-

    // -========================        entidade          ======================================================-
    Route::get('/entidade', [EntidadeControle::class,'index'])->name('entidade.index')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/entidade/cadastro', [EntidadeControle::class,'enviar'])->name('entidade.enviar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::post('/entidade/cadastro', [EntidadeControle::class,'cadastro'])->name('entidade.cadastro')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/entidade/view/{id}', [EntidadeControle::class,'view'])->name('entidade.view')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/entidade/editar/{id}', [EntidadeControle::class,'editar'])->name('entidade.editar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/entidade/delete/{id}', [EntidadeControle::class,'delete'])->name('entidade.delete')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::put('/entidade/modificar/{id}', [EntidadeControle::class,'update'])->name('entidade.update')->middleware(AccessLevelMiddleware::class . ':admin');

    Route::get('/entidade/msg', [EntidadeControle::class,'msg'])->name('entidade.msg')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/entidade/msg_A', [EntidadeControle::class,'msg_A'])->name('entidade.msg_A')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/entidade/msg_D', [EntidadeControle::class,'msg_D'])->name('entidade.msg_D')->middleware(AccessLevelMiddleware::class . ':admin');
    // -==============================================================================-

    // -========================      Super          ======================================================-
    Route::get('/Super', [SuperControle::class,'index'])->name('super.index')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Super/cadastro', [SuperControle::class,'enviar'])->name('super.enviar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::post('/Super/cadastro', [SuperControle::class,'cadastro'])->name('super.cadastro')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Super/view/{id}', [SuperControle::class,'view'])->name('super.view')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Super/editar/{id}', [SuperControle::class,'editar'])->name('super.editar')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Super/delete/{id}', [SuperControle::class,'delete'])->name('super.delete')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::put('/Super/modificar/{id}', [SuperControle::class,'update'])->name('super.update')->middleware(AccessLevelMiddleware::class . ':admin');

    Route::get('/Super/msg', [SuperControle::class,'msg'])->name('super.msg')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Super/msg_A', [SuperControle::class,'msg_A'])->name('super.msg_A')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/Super/msg_D', [SuperControle::class,'msg_D'])->name('super.msg_D')->middleware(AccessLevelMiddleware::class . ':admin');
    // -==============================================================================-

    Route::get('/RelatorioPDF', [PdfControle::class, 'gerarpdf'])->name('gerar.relatorio')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/RelatorioPDF2', [PdfControle::class, 'pdf_form'])->name('gerar.relatorioForm')->middleware(AccessLevelMiddleware::class . ':admin');
    Route::get('/RelatorioPDF/Filtro/{id}', [PdfControle::class, 'pdf_filtro'])->name('relatorio.filtro')->middleware(AccessLevelMiddleware::class . ':admin');
});
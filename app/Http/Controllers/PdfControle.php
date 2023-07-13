<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Dompdf\Dompdf;




class PdfControle extends Controller
{
    public function gerarPdf()
    {
        // Recupere os dados das consultas dos pacientes (você já está fazendo isso no código que compartilhou)
        $estudante1 = Student::all();
        // Renderize a view com a tabela de consultas em formato HTML
      
            $title = 'Gestão de estudantes';
            $date = date('m/d/Y');
          
           
        $html = view('utils.estudante.Relatorio', compact('estudante1','date','title'))->render();

        // Crie uma nova instância do Dompdf
        $dompdf = new Dompdf();

        // Carregue o HTML do relatório no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        // Defina o nome do arquivo do PDF gerado
        $filename = 'Estudante_Relatorio.pdf';

        // Envie o PDF para o navegador para download
        return $dompdf->stream($filename);
    }

    public function pdf_form(){

        // $paciente = Patient::findOrFail($id);
         $estudante1 = Student::all();
         // Recupere os dados das consultas dos pacientes, filtrando pelo ID do paciente
         //$consultas = Appointment::where('paciente_id', $id)->get();
         // Renderize a view com a tabela de consultas em formato HTML
         $html = view('utils.estudante.Relatorio2', compact('estudante1'))->render();
        
         // Crie uma nova instância do Dompdf
         $dompdf = new Dompdf();
 
         // Carregue o HTML do relatório no Dompdf
         $dompdf->loadHtml($html);
 
         // Renderize o PDF
         $dompdf->render();
 
         // Defina o nome do arquivo do PDF gerado
         $filename = 'Estudante_Relatorio.pdf';
 
         // Envie o PDF para o navegador para download
         return $dompdf->stream($filename);
 
 
     }
    public function pdf_filtro(string $id){

       // $paciente = Patient::findOrFail($id);
        $estudante = Student::find($id);
        // Recupere os dados das consultas dos pacientes, filtrando pelo ID do paciente
        //$consultas = Appointment::where('paciente_id', $id)->get();
        // Renderize a view com a tabela de consultas em formato HTML
        $html = view('utils.estudante.Relatorio_filtro', compact('estudante'))->render();
       
        // Crie uma nova instância do Dompdf
        $dompdf = new Dompdf();

        // Carregue o HTML do relatório no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        // Defina o nome do arquivo do PDF gerado
        $filename = 'Estudante_' . $estudante->name . '_Relatorio.pdf';

        // Envie o PDF para o navegador para download
        return $dompdf->stream($filename);
    }
   

}



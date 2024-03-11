<?php

namespace App\Controller;

use App\Services\Session;
use FPDF;

class PdfController extends Controller
{
    public static function download()
    {
        Session::start();
        parent::authentic();
        
        $pdf = new FPDF();
        $pdf->AddPage();
        
        // Título
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Nota Fiscal', 0, 1, 'C');
        $pdf->Ln(10); // Adiciona espaçamento
        
        // Informações do cliente
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Cliente: John Doe', 0, 1);
        $pdf->Cell(0, 10, 'Data: ' . date('Y-m-d'), 0, 1);
        $pdf->Ln(10); // Adiciona espaçamento
        
        // Tabela de produtos
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, 'Produto', 1);
        $pdf->Cell(30, 10, 'Quantidade', 1);
        $pdf->Cell(40, 10, 'Preço Unitário', 1);
        $pdf->Cell(40, 10, 'Total', 1);
        $pdf->Ln(); // Adiciona espaçamento
        
        $pdf->SetFont('Arial', '', 12);
        // Produto 1
        $pdf->Cell(40, 10, 'Produto A', 1);
        $pdf->Cell(30, 10, '2', 1);
        $pdf->Cell(40, 10, 'R$ 50,00', 1);
        $pdf->Cell(40, 10, 'R$ 100,00', 1);
        $pdf->Ln(); // Adiciona espaçamento
        
        // Produto 2
        $pdf->Cell(40, 10, 'Produto B', 1);
        $pdf->Cell(30, 10, '1', 1);
        $pdf->Cell(40, 10, 'R$ 30,00', 1);
        $pdf->Cell(40, 10, 'R$ 30,00', 1);
        $pdf->Ln(10); // Adiciona espaçamento
        
        // Total
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(150, 10, 'Total:', 1, 0, 'R');
        $pdf->Cell(40, 10, 'R$ 130,00', 1);
        
        // Saída do PDF
        $pdf->Output('NotaFiscal.pdf', 'I');
    }
}

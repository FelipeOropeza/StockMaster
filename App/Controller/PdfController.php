<?php

namespace App\Controller;

use App\Model\PedidoModel;
use App\Services\Session;
use FPDF;

class PdfController extends Controller
{
    public static function download()
    {
        Session::start();
        parent::authentic();

        $model = new PedidoModel();
        $model->Nf = $_SESSION['NF'];
        $model = $model->selectPed();

        $referencia = $model[0];

        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Nota Fiscal: ' . $_SESSION['NF'], 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Funcionario: ' . $_SESSION['nome'], 0, 1);
        $pdf->Cell(0, 10, 'Data: ' . $referencia['DataCompra'], 0, 1);
        $pdf->Ln(10);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, 'Produto', 1);
        $pdf->Cell(30, 10, 'Quantidade', 1);
        $pdf->Cell(40, 10, 'Preco Unitario', 1);
        $pdf->Cell(40, 10, 'Total', 1);
        $pdf->Ln();

        foreach ($model as $items) :
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(40, 10, $items['Nome'], 1);
            $pdf->Cell(30, 10, $items['Qtd'], 1);
            $pdf->Cell(40, 10, $items['ValorItem'], 1);
            $pdf->Cell(40, 10, $items['ValorTotal'], 1);
            $pdf->Ln();
        endforeach;

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(150, 10, 'Total:', 1, 0, 'R');
        $pdf->Cell(40, 10, 'R$ ' . $referencia['ValorPed'], 1);

        $pdf->Output('NotaFiscal.pdf', 'D');
    }
}

<?php

require_once '../controllers/ReporteController.php';

$reporte = new ReporteController();

$reporte->reporteExcel();
$sheet->getStyle('A1:E1')->getFont()->setBold(true);

$sheet->getStyle('A1:E1')->getFill()

->setFillType(

\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID

)

->getStartColor()

->setARGB('4F81BD');

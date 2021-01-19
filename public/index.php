<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml(file_get_contents('public/template.html'));
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('invoice',array('Attachment'=>0));

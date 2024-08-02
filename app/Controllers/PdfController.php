<?php

namespace App\Controllers;

use App\Models\PemasokanModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfController extends BaseController
{
    public function downloadPdf()
    {
        $model = new PemasokanModel();
        $data['pemasokan'] = $model->findAll();

        // Muat file view
        $html = view('pemasukan_pdf', $data);

        // Buat instance dari Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Arial'); // Menetapkan font default

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Kirim PDF ke browser
        return $dompdf->stream("pemasukan.pdf", ["Attachment" => 1]);
    }
}

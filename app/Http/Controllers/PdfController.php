<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


class PdfController extends Controller
{
    public function index()
    {
        // $data = [
        //     'title' => 'Welcome to Tutsmake.com',
        //     'date' => date('m/d/Y')
        // ];

        // $pdf = PDF::loadView('pdf.testPdf', $data);
        // $dompdf->set_paper("A4", "portrait");
        $pdf = PDF::loadview('pdf.test');
        return $pdf->stream('cert.pdf');
    }
}

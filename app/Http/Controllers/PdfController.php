<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class PdfController extends Controller
{
     public function index() {

        $view = view('partials.resumes.resume-download', ['downloading' => true]);
        $resume = $view->render();

        $pdf = App::make('dompdf.wrapper');
        $pdf->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->loadHTML($resume);
        return $pdf->download('AP-0101.pdf');
    }
}

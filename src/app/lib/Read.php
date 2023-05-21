<?php

namespace App\lib;

use Smalot\PdfParser\Parser;
use App\lib\TranslateFileData;

class Read
{
    public $output;
    public $file;
    public Parser $pdfDriver;

    public function __construct($file)
    {
        $this->file = $file;
        $this->pdfDriver = new Parser();
        $this->output = array();
    }



    public function getFile()
    {
        $pdf = $this->pdfDriver->parseFile($this->file);
        $textData = explode('. ', $pdf->getText());
        foreach ($textData as $value) {
            $textTranslate = new TranslateFileData($value);
            $response = (object)$textTranslate->run();
            array_push($this->output, $response);
        }
        
        return $this->output;
    }
}


<?php

namespace App\Http\Controllers;

use App\lib\Read;
use Illuminate\Http\Request;

class PostFormController extends Controller
{
    private const FORM_DATA_VALIDATOR = [
        "originalLang" => "required",
        "endlLang" => "required",
        "fileRef" => "required"
    ];

    private const FORM_DATA_ERROR_MESSAGE = [
        // REQUIRED
        "originalLang.required" => "Данные обязательны",
        "endlLang.required" => "Данные обязательны",
        "fileRef.required" => "Данные обязательны",
    ];

    public function formData(Request $request)
    {
        $validated = $request->validate(self::FORM_DATA_VALIDATOR, self::FORM_DATA_ERROR_MESSAGE);
        $readFile = new Read($request->file('fileRef'));
        return $readFile->getFile();
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Models\LetterTemplate;
use App\Http\Controllers\Controller;

class LetterTemplateWebController extends Controller
{
    public function index()
    {
        $templates = LetterTemplate::all();
        return view('templates.index', compact('templates'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\LetterTemplate;
use Illuminate\Http\Request;

class LetterTemplateController extends Controller
{
    public function index()
    {
        return LetterTemplate::all();
    }

    public function showView()
{
    $templates = LetterTemplate::all();
    return view('template_list', compact('templates'));
}


    public function store(Request $request)
    {
        $file = $request->file('file')->store('templates');

        return LetterTemplate::create([
            'title' => $request->title,
            'category' => $request->category,
            'file_path' => $file
        ]);
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

final class FileController extends Controller
{
    public function index()
    {
        $files = File::all();

        return view('files.index', compact('files'));
    }

    public function store()
    {
        //
    }

    public function download(File $file)
    {
        //
    }
}

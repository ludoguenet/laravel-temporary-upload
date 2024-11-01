<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function index()
    {
        $files = File::all();

        return view('files.index', compact('files'));
    }

    public function store()
    {
        request()->validate([
            'file' => [
                'required',
                'max:5120', // 5MB,
                'mimes:pdf',
            ]
        ]);

        $upload = request('file');

        $name = $upload->getClientOriginalName();

        File::create([
            'name' => $name,
            'path' => $upload->storeAs('uploads', $name, 'public'),
        ]);

        return back();
    }

    public function download(File $file)
    {
        return redirect(Storage::temporaryUrl($file->path, now()->addHour()));
    }
}

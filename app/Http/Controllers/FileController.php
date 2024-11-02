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
        $validated = request()->validate([
            'file' => [
                'required',
                'max:5120', // 5 MB
                'mimes:pdf',
            ],
        ]);

        $file = $validated['file'];
        $name = $file->getClientOriginalName();

        File::create([
            'name' => $name,
            'path' => $file->storeAs('uploads', $name),
        ]);

        return back();
    }

    public function download(File $file)
    {
        return redirect(Storage::temporaryUrl($file->path, now()->addHour()));
     }
}

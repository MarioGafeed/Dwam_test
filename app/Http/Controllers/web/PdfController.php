<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function download_local(Request $request)
    {
      if(Storage::disk('public')->exists("pdf/$request->file")){
        $path = Storage::disk('public')->path("pdf/$request->file");
        $content = file_get_contents($path);
        return response($content)->withHeaders([
          'content-Type' => mime_content_type($path)
        ]);
      }
      else return redirect('/404');
    }
}

<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Vcategory;
use App\Models\Pcategory;

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

    public function index()
    {
      $vcats               = Vcategory::select('id', 'title', 'image', 'updated_at')->OrderBy('id', 'DESC')->get();
      $pcats               = Pcategory::select('id', 'title', 'image', 'updated_at')->OrderBy('id', 'DESC')->get();

      // dd($vpostsHasSameTaqs);
      return view('frontend.books.index', [
        'vcats'=>$vcats,
        'pcats'=>$pcats,
      ]);
    }
}

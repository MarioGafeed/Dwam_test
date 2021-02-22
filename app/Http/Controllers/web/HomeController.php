<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pcategory;
use App\Models\Vcategory;

class HomeController extends Controller
{
    public function index()
    {
      $pcats = Pcategory::select('id', 'title')->get();
      $vcats = Vcategory::select('id', 'title')->get();
      return view('frontend.index', [
        'pcats' => $pcats,
        'vcats' => $vcats
      ]);
    }

    public function changeLang($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            session()->put('lang', $lang);
        }
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}

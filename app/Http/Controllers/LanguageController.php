<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        if (in_array($locale, ['en', 'es', 'fr'])) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}

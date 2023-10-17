<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $locale = $request->input('locale');

        if (in_array($locale, ['en', 'fr'])) {
            session(['locale' => $locale]);
        }

        return back();
    }
}

<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App;
use App\Base\Services\SitemapService;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;

class LangController extends Controller
{
    public const LOCALES = ['ro', 'ru'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }


    public static function setDefault(): void
    {
        if (!session()->get('locale') || !in_array(session()->get('locale'), self::LOCALES, true)) {
            App::setLocale(self::LOCALES[0]);
            session()->put('locale', self::LOCALES[0]);
        }
    }

    public static function getLocale()
    {
        if (session()->get('locale')) {
            return session()->get('locale');
        }
        return self::LOCALES[0];
    }
}

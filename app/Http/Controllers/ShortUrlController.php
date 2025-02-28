<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ShortUrlController extends Controller
// {
//     //
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;

class ShortUrlController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $shortCode = substr(md5(uniqid()), 0, 6);
        
        $shortUrl = ShortUrl::create([
            'original_url' => $request->original_url,
            'short_code' => $shortCode
        ]);

        return redirect()->back()->with('short_url', url('/' . $shortUrl->short_code));
    }

    public function redirect($code)
    {
        $shortUrl = ShortUrl::where('short_code', $code)->firstOrFail();
        return redirect($shortUrl->original_url);
    }
}


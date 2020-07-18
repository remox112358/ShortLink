<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShortlinkRequest;
use Illuminate\Support\Str;
use App\Models\Shortlink;

class ShortlinkController extends Controller
{
    public function shorten(ShortlinkRequest $request)
    {
        $url = $request->input('url');

        if (!self::isset($url)) {
            self::create($url);
        }

        $shortlink = Shortlink::where('url', $url)->first();
        $shortlink->count++;
        $shortlink->update();

        return redirect()
                ->route('home')
                ->with('result', $shortlink);
    }

    public function isset($url)
    {
        return (bool) Shortlink::where('url', $url)->count();
    }

    public function create($url)
    {
        $shortlink = new Shortlink;
        $shortlink->url = $url;
        $shortlink->key = Str::random(8);
        $shortlink->save();
    }

    public function redirect($key)
    {
        $shortlink = Shortlink::where('key', $key)->firstOrFail();
        
        return redirect($shortlink->url);
    }
}

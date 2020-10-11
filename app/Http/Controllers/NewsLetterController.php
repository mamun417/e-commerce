<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetter\StoreNewsLetterRequest;
use App\Models\NewsLetter;

class NewsLetterController extends Controller
{
    public function store(StoreNewsLetterRequest $request)
    {
        $request_data = $request->only('email');

        NewsLetter::create($request_data);

        return back()->with('success', 'Thank you for subscribing.');
    }
}

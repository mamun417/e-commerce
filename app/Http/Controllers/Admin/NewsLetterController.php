<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        $perPage = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $newsletters = NewsLetter::latest();

        if ($keyword) {
            $newsletters = $newsletters->where('email', 'like', '%' . request()->keyword . '%');
        }

        $newsletters = $newsletters->paginate($perPage);

        return view('admin.newsletter.index', compact('newsletters'));
    }

    public function destroy(NewsLetter $newsLetter)
    {

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        $per_page = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $newsletters = NewsLetter::latest();

        if ($keyword) {
            $newsletters = $newsletters->where('email', 'like', '%' . request()->keyword . '%');
        }

        $newsletters = $newsletters->paginate($per_page);

        return view('admin.newsletter.index', compact('newsletters'));
    }

    public function destroy(NewsLetter $newsletter)
    {
        $newsletter->delete();
        return back()->with('success', 'Newsletter has been deleted successful.');
    }
}

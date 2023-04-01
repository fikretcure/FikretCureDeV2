<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $repositories = Repository::where('name', 'like', '%' . request()->search . '%')->get();
        return view('search', compact('repositories'));
    }
}

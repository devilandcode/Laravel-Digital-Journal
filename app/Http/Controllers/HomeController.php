<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Note;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index ()
    {
        $notes = Note::with('country')->Paginate(5);

        return view('home', compact('notes'));
    }
}

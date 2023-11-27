<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index ()
    {
        $notes = Note::simplePaginate(5);

        return view('home', [
            'notes' => $notes
        ]);
    }
}

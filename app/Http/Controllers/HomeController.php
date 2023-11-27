<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index ()
    {
        $notes = Note::query()->Paginate(5);

        return view('home', [
            'notes' => $notes
        ]);
    }
}

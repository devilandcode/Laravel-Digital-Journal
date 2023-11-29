<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Notes\NotesService;

class NotesController extends Controller
{
    public function __construct(
        protected NotesService $notesService
    )
    {
    }

    public function show(string $slug)
    {
        $note = $this->notesService->findBySlug($slug);

        return view('posts.index', compact('note'));
    }
}

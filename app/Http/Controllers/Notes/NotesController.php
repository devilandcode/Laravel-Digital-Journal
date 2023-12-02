<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Notes\NotesService;
use App\Services\Countries\CountriesService;

class NotesController extends Controller
{
    public function __construct(
        protected NotesService $notesService,
        protected CountriesService $countriesService
    )
    {
    }

    public function show(string $slug)
    {
        $note = $this->notesService->findBySlug($slug);

        return view('notes.index', compact('note'));
    }

    public function create()
    {
        $countries = $this->countriesService->getAvailableCountries();

        return view('notes.create', compact('countries'));
    }
}

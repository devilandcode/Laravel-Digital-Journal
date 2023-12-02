<?php

namespace App\Services\Notes;

use App\Services\Notes\Repositories\NoteRepositoryInterface;
class NotesService
{
    public function __construct(
        private NoteRepositoryInterface $noteRepository,
    )
    {
    }

    public function findBySlug(string $slug)
    {
        return $this->noteRepository->find([
            'key' => 'slug',
            'value' => $slug
        ]);
    }

}

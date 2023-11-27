<?php

namespace App\Services\Notes;

use App\Services\Notes\Repositories\NoteRepositoryInterface;
class NotesService
{
    public function __construct(
        private NoteRepositoryInterface $repository,
    )
    {
    }

    public function findBySlug(string $slug)
    {
        return $this->repository->find([
            'key' => 'slug',
            'value' => $slug
        ]);
    }
}

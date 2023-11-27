<?php

namespace App\Services\Notes\Repositories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Builder;

class EloquentNoteRepository implements NoteRepositoryInterface
{

    public function find(array $params): \Illuminate\Database\Eloquent\Model|Builder|Note
    {
        extract($params);
        return Note::where($key, $value)->firstOrFail();
    }
}

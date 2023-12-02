<?php

namespace App\Services\Countries\Repositories;

use App\Models\Country;

class EloquentCountryRepository implements CountryRepositoryInterface
{

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return Country::all();
    }

    public function find(array $params): \Illuminate\Database\Eloquent\Model|Country|\Illuminate\Database\Eloquent\Builder
    {
        extract($params);
        return Country::where($key, $operator = '=', $value)->firstOrFail();
    }
}

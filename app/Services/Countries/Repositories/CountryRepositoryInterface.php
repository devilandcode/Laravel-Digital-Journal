<?php

namespace App\Services\Countries\Repositories;

interface CountryRepositoryInterface
{
    public function getAll();
    public function find (array $params);

}

<?php

namespace App\Services\Countries;

use App\Services\Countries\Repositories\CountryRepositoryInterface;

class CountriesService
{
    public function __construct(
        private CountryRepositoryInterface $repository
    )
    {
    }

    public function getAvailableCountries()
    {
        return $this->repository->getAll();
    }
}

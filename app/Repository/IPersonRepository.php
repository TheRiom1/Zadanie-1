<?php

namespace App\Repository;
use App\Models\Person;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface IPersonRepository
{
    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function findAll(int $perPage = 10): LengthAwarePaginator;
    public function search(String $request);
    public function update(Request $request, Person $person);
    public function store(Request $request);
}
<?php

namespace App\Repository;

use App\Models\Person;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class PersonRepository implements IPersonRepository
{
    /**
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function findAll(int $perPage = 10): LengthAwarePaginator
    {
        return Person::query()
            ->select('people.*')
            ->paginate($perPage);
    }
    public function search($search) {
      
        $people = Person::where('firstname', 'like', "%{$search}%")->paginate(10);
        $people = Person::orwhere('lastname', 'like', "%{$search}%")->paginate(10);
        $people =  Person::orwhere('street', 'like', "%{$search}%")->paginate(10);
        $people =  Person::orwhere('city', 'like', "%{$search}%")->paginate(10);
        $people=  Person::orwhere('gender', 'like', "%{$search}%")->paginate(10);
        $people=  Person::orwhere('age', 'like', "%{$search}%")->paginate(10);
        $people=  Person::orwhere('housenumber', 'like', "%{$search}%")->paginate(10);
        $people=  Person::orwhere('apartmentnumber', 'like', "%{$search}%")->paginate(10);
            return $people;


    }

    public function update($request, $person)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required'
        ]);
        $person->update($request->all());
       
    }
    public function store ($request){
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'age' => 'required'

    ]);
    Person::create($request->all());
    
}
}

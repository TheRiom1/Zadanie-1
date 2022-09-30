<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Repository\IPersonRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    const PER_PAGE = 10;
    /**
     * @var IPersonRepository
     */
    private IPersonRepository $personRepository;
    /**
     * @param IPersonRepository $personRepository
     */
    public function __construct(IPersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $search = request() -> query('search');
        if ($search) {
            $people = $this-> personRepository->search($search);
        } else {
            $people = $this->personRepository->findAll(self::PER_PAGE);
        }
       $data = compact('people', 'search');
        return view(
            'person.index'
           
        )->with($data);
        
    }
   
    
    public function create()
    {
        return view('person.create');
    }
    /**
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $person=$this->personRepository->store($request);
        return redirect()->route('person.index');
    }
    /**
     * @return Application|Factory|View
     */
    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
    }
    /**
     * @return RedirectResponse
     */
    public function update(Request $request, Person $person)
    {
        $person=$this->personRepository->update($request, $person);
        return redirect()->route('person.index');
    }
    /**

     * @return RedirectResponse
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('person.index');
    }

}

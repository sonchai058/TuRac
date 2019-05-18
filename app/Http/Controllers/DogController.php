<?php

namespace App\Http\Controllers;

use App\DataTables\DogDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDogRequest;
use App\Http\Requests\UpdateDogRequest;
use App\Repositories\DogRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DogController extends AppBaseController
{
    /** @var  DogRepository */
    private $dogRepository;

    public function __construct(DogRepository $dogRepo)
    {
        $this->dogRepository = $dogRepo;
    }

    /**
     * Display a listing of the Dog.
     *
     * @param DogDataTable $dogDataTable
     * @return Response
     */
    public function index(DogDataTable $dogDataTable)
    {
        return $dogDataTable->render('dogs.index');
    }

    /**
     * Show the form for creating a new Dog.
     *
     * @return Response
     */
    public function create()
    {
        return view('dogs.create');
    }

    /**
     * Store a newly created Dog in storage.
     *
     * @param CreateDogRequest $request
     *
     * @return Response
     */
    public function store(CreateDogRequest $request)
    {
        $input = $request->all();

        $dog = $this->dogRepository->create($input);

        Flash::success('Dog saved successfully.');

        return redirect(route('dogs.index'));
    }

    /**
     * Display the specified Dog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dog = $this->dogRepository->find($id);

        if (empty($dog)) {
            Flash::error('Dog not found');

            return redirect(route('dogs.index'));
        }

        return view('dogs.show')->with('dog', $dog);
    }

    /**
     * Show the form for editing the specified Dog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dog = $this->dogRepository->find($id);

        if (empty($dog)) {
            Flash::error('Dog not found');

            return redirect(route('dogs.index'));
        }

        return view('dogs.edit')->with('dog', $dog);
    }

    /**
     * Update the specified Dog in storage.
     *
     * @param  int              $id
     * @param UpdateDogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDogRequest $request)
    {
        $dog = $this->dogRepository->find($id);

        if (empty($dog)) {
            Flash::error('Dog not found');

            return redirect(route('dogs.index'));
        }

        $dog = $this->dogRepository->update($request->all(), $id);

        Flash::success('Dog updated successfully.');

        return redirect(route('dogs.index'));
    }

    /**
     * Remove the specified Dog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dog = $this->dogRepository->find($id);

        if (empty($dog)) {
            Flash::error('Dog not found');

            return redirect(route('dogs.index'));
        }

        $this->dogRepository->delete($id);

        Flash::success('Dog deleted successfully.');

        return redirect(route('dogs.index'));
    }
}

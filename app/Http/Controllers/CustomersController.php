<?php

namespace App\Http\Controllers;

use App\DataTables\CustomersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use App\Repositories\CustomersRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CustomersController extends AppBaseController
{
    /** @var  CustomersRepository */
    private $customersRepository;

    public function __construct(CustomersRepository $customersRepo)
    {
        $this->customersRepository = $customersRepo;
    }

    /**
     * Display a listing of the Customers.
     *
     * @param CustomersDataTable $customersDataTable
     * @return Response
     */
    public function index(CustomersDataTable $customersDataTable)
    {
        return $customersDataTable->render('customers.index');
    }

    /**
     * Show the form for creating a new Customers.
     *
     * @return Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created Customers in storage.
     *
     * @param CreateCustomersRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomersRequest $request)
    {
        $input = $request->all();

        $customers = $this->customersRepository->create($input);

        Flash::success('Customers saved successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Display the specified Customers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        return view('customers.show')->with('customers', $customers);
    }

    /**
     * Show the form for editing the specified Customers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        return view('customers.edit')->with('customers', $customers);
    }

    /**
     * Update the specified Customers in storage.
     *
     * @param  int              $id
     * @param UpdateCustomersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomersRequest $request)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        $customers = $this->customersRepository->update($request->all(), $id);

        Flash::success('Customers updated successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified Customers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        $this->customersRepository->delete($id);

        Flash::success('Customers deleted successfully.');

        return redirect(route('customers.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\AccountChartsDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateAccountChartsRequest;
use App\Http\Requests\UpdateAccountChartsRequest;
use App\Repositories\AccountChartsRepository;
use Flash;
use Response;

class AccountChartsController extends AppBaseController
{
    /** @var  AccountChartsRepository */
    private $accountChartsRepository;

    public function __construct(AccountChartsRepository $accountChartsRepo)
    {
        $this->accountChartsRepository = $accountChartsRepo;
    }

    /**
     * Display a listing of the AccountCharts.
     *
     * @param AccountChartsDataTable $accountChartsDataTable
     * @return Response
     */
    public function index(AccountChartsDataTable $accountChartsDataTable)
    {
        return $accountChartsDataTable->render('account_charts.index');
    }

    /**
     * Show the form for creating a new AccountCharts.
     *
     * @return Response
     */
    public function create()
    {
        return view('account_charts.create');
    }

    /**
     * Store a newly created AccountCharts in storage.
     *
     * @param CreateAccountChartsRequest $request
     *
     * @return Response
     */
    public function store(CreateAccountChartsRequest $request)
    {
        $input = $request->all();

        $accountCharts = $this->accountChartsRepository->create($input);

        Flash::success('Account Charts saved successfully.');

        return redirect(route('accountCharts.index'));
    }

    /**
     * Display the specified AccountCharts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $accountCharts = $this->accountChartsRepository->find($id);

        if (empty($accountCharts)) {
            Flash::error('Account Charts not found');

            return redirect(route('accountCharts.index'));
        }

        return view('account_charts.show')->with('accountCharts', $accountCharts);
    }

    /**
     * Show the form for editing the specified AccountCharts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $accountCharts = $this->accountChartsRepository->find($id);

        if (empty($accountCharts)) {
            Flash::error('Account Charts not found');

            return redirect(route('accountCharts.index'));
        }

        return view('account_charts.edit')->with('accountCharts', $accountCharts);
    }

    /**
     * Update the specified AccountCharts in storage.
     *
     * @param  int              $id
     * @param UpdateAccountChartsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAccountChartsRequest $request)
    {
        $accountCharts = $this->accountChartsRepository->find($id);

        if (empty($accountCharts)) {
            Flash::error('Account Charts not found');

            return redirect(route('accountCharts.index'));
        }

        $accountCharts = $this->accountChartsRepository->update($request->all(), $id);

        Flash::success('Account Charts updated successfully.');

        return redirect(route('accountCharts.index'));
    }

    /**
     * Remove the specified AccountCharts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $accountCharts = $this->accountChartsRepository->find($id);

        if (empty($accountCharts)) {
            Flash::error('Account Charts not found');

            return redirect(route('accountCharts.index'));
        }

        $this->accountChartsRepository->delete($id);

        Flash::success('Account Charts deleted successfully.');

        return redirect(route('accountCharts.index'));
    }

    //get Account Json
    public function getAccountChart()
    {
        $data = $this->accountChartsRepository->getTree();
        return response()->json($data, 200);
    }
}

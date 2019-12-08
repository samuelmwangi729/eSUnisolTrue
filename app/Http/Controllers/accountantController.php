<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaccountantRequest;
use App\Http\Requests\UpdateaccountantRequest;
use App\Repositories\accountantRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class accountantController extends AppBaseController
{
    /** @var  accountantRepository */
    private $accountantRepository;

    public function __construct(accountantRepository $accountantRepo)
    {
        $this->accountantRepository = $accountantRepo;
    }

    /**
     * Display a listing of the accountant.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $accountants = $this->accountantRepository->all();

        return view('accountants.index')
            ->with('accountants', $accountants);
    }

    /**
     * Show the form for creating a new accountant.
     *
     * @return Response
     */
    public function create()
    {
        return view('accountants.create');
    }

    /**
     * Store a newly created accountant in storage.
     *
     * @param CreateaccountantRequest $request
     *
     * @return Response
     */
    public function store(CreateaccountantRequest $request)
    {
        $input = $request->all();

        $accountant = $this->accountantRepository->create($input);

        Flash::success('Accountant saved successfully.');

        return redirect(route('accountants.index'));
    }

    /**
     * Display the specified accountant.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $accountant = $this->accountantRepository->find($id);

        if (empty($accountant)) {
            Flash::error('Accountant not found');

            return redirect(route('accountants.index'));
        }

        return view('accountants.show')->with('accountant', $accountant);
    }

    /**
     * Show the form for editing the specified accountant.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $accountant = $this->accountantRepository->find($id);

        if (empty($accountant)) {
            Flash::error('Accountant not found');

            return redirect(route('accountants.index'));
        }

        return view('accountants.edit')->with('accountant', $accountant);
    }

    /**
     * Update the specified accountant in storage.
     *
     * @param int $id
     * @param UpdateaccountantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateaccountantRequest $request)
    {
        $accountant = $this->accountantRepository->find($id);

        if (empty($accountant)) {
            Flash::error('Accountant not found');

            return redirect(route('accountants.index'));
        }

        $accountant = $this->accountantRepository->update($request->all(), $id);

        Flash::success('Accountant updated successfully.');

        return redirect(route('accountants.index'));
    }

    /**
     * Remove the specified accountant from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $accountant = $this->accountantRepository->find($id);

        if (empty($accountant)) {
            Flash::error('Accountant not found');

            return redirect(route('accountants.index'));
        }

        $this->accountantRepository->delete($id);

        Flash::success('Accountant deleted successfully.');

        return redirect(route('accountants.index'));
    }
}

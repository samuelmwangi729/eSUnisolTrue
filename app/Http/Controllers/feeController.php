<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefeeRequest;
use App\Http\Requests\UpdatefeeRequest;
use App\Repositories\feeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class feeController extends AppBaseController
{
    /** @var  feeRepository */
    private $feeRepository;

    public function __construct(feeRepository $feeRepo)
    {
        $this->feeRepository = $feeRepo;
    }

    /**
     * Display a listing of the fee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fees = $this->feeRepository->all();

        return view('fees.index')
            ->with('fees', $fees);
    }

    /**
     * Show the form for creating a new fee.
     *
     * @return Response
     */
    public function create()
    {
        return view('fees.create');
    }

    /**
     * Store a newly created fee in storage.
     *
     * @param CreatefeeRequest $request
     *
     * @return Response
     */
    public function store(CreatefeeRequest $request)
    {
        $input = $request->all();

        $fee = $this->feeRepository->create($input);

        Flash::success('Fee saved successfully.');

        return redirect(route('fees.index'));
    }

    /**
     * Display the specified fee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        return view('fees.show')->with('fee', $fee);
    }

    /**
     * Show the form for editing the specified fee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        return view('fees.edit')->with('fee', $fee);
    }

    /**
     * Update the specified fee in storage.
     *
     * @param int $id
     * @param UpdatefeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefeeRequest $request)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        $fee = $this->feeRepository->update($request->all(), $id);

        Flash::success('Fee updated successfully.');

        return redirect(route('fees.index'));
    }

    /**
     * Remove the specified fee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fee = $this->feeRepository->find($id);

        if (empty($fee)) {
            Flash::error('Fee not found');

            return redirect(route('fees.index'));
        }

        $this->feeRepository->delete($id);

        Flash::success('Fee deleted successfully.');

        return redirect(route('fees.index'));
    }
}

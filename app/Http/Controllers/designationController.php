<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedesignationRequest;
use App\Http\Requests\UpdatedesignationRequest;
use App\Repositories\designationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class designationController extends AppBaseController
{
    /** @var  designationRepository */
    private $designationRepository;

    public function __construct(designationRepository $designationRepo)
    {
        $this->designationRepository = $designationRepo;
    }

    /**
     * Display a listing of the designation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $designations = $this->designationRepository->all();

        return view('designations.index')
            ->with('designations', $designations);
    }

    /**
     * Show the form for creating a new designation.
     *
     * @return Response
     */
    public function create()
    {
        return view('designations.create');
    }

    /**
     * Store a newly created designation in storage.
     *
     * @param CreatedesignationRequest $request
     *
     * @return Response
     */
    public function store(CreatedesignationRequest $request)
    {
        $input = $request->all();

        $designation = $this->designationRepository->create($input);

        Flash::success('Designation saved successfully.');

        return redirect(route('designations.index'));
    }

    /**
     * Display the specified designation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $designation = $this->designationRepository->find($id);

        if (empty($designation)) {
            Flash::error('Designation not found');

            return redirect(route('designations.index'));
        }

        return view('designations.show')->with('designation', $designation);
    }

    /**
     * Show the form for editing the specified designation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $designation = $this->designationRepository->find($id);

        if (empty($designation)) {
            Flash::error('Designation not found');

            return redirect(route('designations.index'));
        }

        return view('designations.edit')->with('designation', $designation);
    }

    /**
     * Update the specified designation in storage.
     *
     * @param int $id
     * @param UpdatedesignationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedesignationRequest $request)
    {
        $designation = $this->designationRepository->find($id);

        if (empty($designation)) {
            Flash::error('Designation not found');

            return redirect(route('designations.index'));
        }

        $designation = $this->designationRepository->update($request->all(), $id);

        Flash::success('Designation updated successfully.');

        return redirect(route('designations.index'));
    }

    /**
     * Remove the specified designation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $designation = $this->designationRepository->find($id);

        if (empty($designation)) {
            Flash::error('Designation not found');

            return redirect(route('designations.index'));
        }

        $this->designationRepository->delete($id);

        Flash::success('Designation deleted successfully.');

        return redirect(route('designations.index'));
    }
}

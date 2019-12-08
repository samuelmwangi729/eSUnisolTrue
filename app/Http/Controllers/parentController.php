<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateparentRequest;
use App\Http\Requests\UpdateparentRequest;
use App\Repositories\parentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class parentController extends AppBaseController
{
    /** @var  parentRepository */
    private $parentRepository;

    public function __construct(parentRepository $parentRepo)
    {
        $this->parentRepository = $parentRepo;
    }

    /**
     * Display a listing of the parent.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parents = $this->parentRepository->all();

        return view('parents.index')
            ->with('parents', $parents);
    }

    /**
     * Show the form for creating a new parent.
     *
     * @return Response
     */
    public function create()
    {
        return view('parents.create');
    }

    /**
     * Store a newly created parent in storage.
     *
     * @param CreateparentRequest $request
     *
     * @return Response
     */
    public function store(CreateparentRequest $request)
    {
        $input = $request->all();

        $parent = $this->parentRepository->create($input);

        Flash::success('Parent saved successfully.');

        return redirect(route('parents.index'));
    }

    /**
     * Display the specified parent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parent = $this->parentRepository->find($id);

        if (empty($parent)) {
            Flash::error('Parent not found');

            return redirect(route('parents.index'));
        }

        return view('parents.show')->with('parent', $parent);
    }

    /**
     * Show the form for editing the specified parent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parent = $this->parentRepository->find($id);

        if (empty($parent)) {
            Flash::error('Parent not found');

            return redirect(route('parents.index'));
        }

        return view('parents.edit')->with('parent', $parent);
    }

    /**
     * Update the specified parent in storage.
     *
     * @param int $id
     * @param UpdateparentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateparentRequest $request)
    {
        $parent = $this->parentRepository->find($id);

        if (empty($parent)) {
            Flash::error('Parent not found');

            return redirect(route('parents.index'));
        }

        $parent = $this->parentRepository->update($request->all(), $id);

        Flash::success('Parent updated successfully.');

        return redirect(route('parents.index'));
    }

    /**
     * Remove the specified parent from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parent = $this->parentRepository->find($id);

        if (empty($parent)) {
            Flash::error('Parent not found');

            return redirect(route('parents.index'));
        }

        $this->parentRepository->delete($id);

        Flash::success('Parent deleted successfully.');

        return redirect(route('parents.index'));
    }
}

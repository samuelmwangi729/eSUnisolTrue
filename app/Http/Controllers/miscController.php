<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemiscRequest;
use App\Http\Requests\UpdatemiscRequest;
use App\Repositories\miscRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class miscController extends AppBaseController
{
    /** @var  miscRepository */
    private $miscRepository;

    public function __construct(miscRepository $miscRepo)
    {
        $this->miscRepository = $miscRepo;
    }

    /**
     * Display a listing of the misc.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $miscs = $this->miscRepository->all();

        return view('miscs.index')
            ->with('miscs', $miscs);
    }

    /**
     * Show the form for creating a new misc.
     *
     * @return Response
     */
    public function create()
    {
        return view('miscs.create');
    }

    /**
     * Store a newly created misc in storage.
     *
     * @param CreatemiscRequest $request
     *
     * @return Response
     */
    public function store(CreatemiscRequest $request)
    {
        $input = $request->all();

        $misc = $this->miscRepository->create($input);

        Flash::success('Misc saved successfully.');

        return redirect(route('miscs.index'));
    }

    /**
     * Display the specified misc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $misc = $this->miscRepository->find($id);

        if (empty($misc)) {
            Flash::error('Misc not found');

            return redirect(route('miscs.index'));
        }

        return view('miscs.show')->with('misc', $misc);
    }

    /**
     * Show the form for editing the specified misc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $misc = $this->miscRepository->find($id);

        if (empty($misc)) {
            Flash::error('Misc not found');

            return redirect(route('miscs.index'));
        }

        return view('miscs.edit')->with('misc', $misc);
    }

    /**
     * Update the specified misc in storage.
     *
     * @param int $id
     * @param UpdatemiscRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemiscRequest $request)
    {
        $misc = $this->miscRepository->find($id);

        if (empty($misc)) {
            Flash::error('Misc not found');

            return redirect(route('miscs.index'));
        }

        $misc = $this->miscRepository->update($request->all(), $id);

        Flash::success('Misc updated successfully.');

        return redirect(route('miscs.index'));
    }

    /**
     * Remove the specified misc from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $misc = $this->miscRepository->find($id);

        if (empty($misc)) {
            Flash::error('Misc not found');

            return redirect(route('miscs.index'));
        }

        $this->miscRepository->delete($id);

        Flash::success('Misc deleted successfully.');

        return redirect(route('miscs.index'));
    }
}

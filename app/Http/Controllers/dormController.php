<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedormRequest;
use App\Http\Requests\UpdatedormRequest;
use App\Repositories\dormRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class dormController extends AppBaseController
{
    /** @var  dormRepository */
    private $dormRepository;

    public function __construct(dormRepository $dormRepo)
    {
        $this->dormRepository = $dormRepo;
    }

    /**
     * Display a listing of the dorm.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dorms = $this->dormRepository->all();

        return view('dorms.index')
            ->with('dorms', $dorms);
    }

    /**
     * Show the form for creating a new dorm.
     *
     * @return Response
     */
    public function create()
    {
        return view('dorms.create');
    }

    /**
     * Store a newly created dorm in storage.
     *
     * @param CreatedormRequest $request
     *
     * @return Response
     */
    public function store(CreatedormRequest $request)
    {
        $input = $request->all();

        $dorm = $this->dormRepository->create($input);

        Flash::success('Dorm saved successfully.');

        return redirect(route('dorms.index'));
    }

    /**
     * Display the specified dorm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dorm = $this->dormRepository->find($id);

        if (empty($dorm)) {
            Flash::error('Dorm not found');

            return redirect(route('dorms.index'));
        }

        return view('dorms.show')->with('dorm', $dorm);
    }

    /**
     * Show the form for editing the specified dorm.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dorm = $this->dormRepository->find($id);

        if (empty($dorm)) {
            Flash::error('Dorm not found');

            return redirect(route('dorms.index'));
        }

        return view('dorms.edit')->with('dorm', $dorm);
    }

    /**
     * Update the specified dorm in storage.
     *
     * @param int $id
     * @param UpdatedormRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedormRequest $request)
    {
        $dorm = $this->dormRepository->find($id);

        if (empty($dorm)) {
            Flash::error('Dorm not found');

            return redirect(route('dorms.index'));
        }

        $dorm = $this->dormRepository->update($request->all(), $id);

        Flash::success('Dorm updated successfully.');

        return redirect(route('dorms.index'));
    }

    /**
     * Remove the specified dorm from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dorm = $this->dormRepository->find($id);

        if (empty($dorm)) {
            Flash::error('Dorm not found');

            return redirect(route('dorms.index'));
        }

        $this->dormRepository->delete($id);

        Flash::success('Dorm deleted successfully.');

        return redirect(route('dorms.index'));
    }
}

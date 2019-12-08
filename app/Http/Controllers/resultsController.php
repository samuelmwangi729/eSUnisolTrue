<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateresultsRequest;
use App\Http\Requests\UpdateresultsRequest;
use App\Repositories\resultsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class resultsController extends AppBaseController
{
    /** @var  resultsRepository */
    private $resultsRepository;

    public function __construct(resultsRepository $resultsRepo)
    {
        $this->resultsRepository = $resultsRepo;
    }

    /**
     * Display a listing of the results.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $results = $this->resultsRepository->all();

        return view('results.index')
            ->with('results', $results);
    }

    /**
     * Show the form for creating a new results.
     *
     * @return Response
     */
    public function create()
    {
        return view('results.create');
    }

    /**
     * Store a newly created results in storage.
     *
     * @param CreateresultsRequest $request
     *
     * @return Response
     */
    public function store(CreateresultsRequest $request)
    {
        $input = $request->all();

        $results = $this->resultsRepository->create($input);

        Flash::success('Results saved successfully.');

        return redirect(route('results.index'));
    }

    /**
     * Display the specified results.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $results = $this->resultsRepository->find($id);

        if (empty($results)) {
            Flash::error('Results not found');

            return redirect(route('results.index'));
        }

        return view('results.show')->with('results', $results);
    }

    /**
     * Show the form for editing the specified results.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $results = $this->resultsRepository->find($id);

        if (empty($results)) {
            Flash::error('Results not found');

            return redirect(route('results.index'));
        }

        return view('results.edit')->with('results', $results);
    }

    /**
     * Update the specified results in storage.
     *
     * @param int $id
     * @param UpdateresultsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateresultsRequest $request)
    {
        $results = $this->resultsRepository->find($id);

        if (empty($results)) {
            Flash::error('Results not found');

            return redirect(route('results.index'));
        }

        $results = $this->resultsRepository->update($request->all(), $id);

        Flash::success('Results updated successfully.');

        return redirect(route('results.index'));
    }

    /**
     * Remove the specified results from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $results = $this->resultsRepository->find($id);

        if (empty($results)) {
            Flash::error('Results not found');

            return redirect(route('results.index'));
        }

        $this->resultsRepository->delete($id);

        Flash::success('Results deleted successfully.');

        return redirect(route('results.index'));
    }
}

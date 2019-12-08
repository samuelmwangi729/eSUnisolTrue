<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclubRequest;
use App\Http\Requests\UpdateclubRequest;
use App\Repositories\clubRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class clubController extends AppBaseController
{
    /** @var  clubRepository */
    private $clubRepository;

    public function __construct(clubRepository $clubRepo)
    {
        $this->clubRepository = $clubRepo;
    }

    /**
     * Display a listing of the club.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clubs = $this->clubRepository->all();

        return view('clubs.index')
            ->with('clubs', $clubs);
    }

    /**
     * Show the form for creating a new club.
     *
     * @return Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created club in storage.
     *
     * @param CreateclubRequest $request
     *
     * @return Response
     */
    public function store(CreateclubRequest $request)
    {
        $input = $request->all();

        $club = $this->clubRepository->create($input);

        Flash::success('Club saved successfully.');

        return redirect(route('clubs.index'));
    }

    /**
     * Display the specified club.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $club = $this->clubRepository->find($id);

        if (empty($club)) {
            Flash::error('Club not found');

            return redirect(route('clubs.index'));
        }

        return view('clubs.show')->with('club', $club);
    }

    /**
     * Show the form for editing the specified club.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $club = $this->clubRepository->find($id);

        if (empty($club)) {
            Flash::error('Club not found');

            return redirect(route('clubs.index'));
        }

        return view('clubs.edit')->with('club', $club);
    }

    /**
     * Update the specified club in storage.
     *
     * @param int $id
     * @param UpdateclubRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclubRequest $request)
    {
        $club = $this->clubRepository->find($id);

        if (empty($club)) {
            Flash::error('Club not found');

            return redirect(route('clubs.index'));
        }

        $club = $this->clubRepository->update($request->all(), $id);

        Flash::success('Club updated successfully.');

        return redirect(route('clubs.index'));
    }

    /**
     * Remove the specified club from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $club = $this->clubRepository->find($id);

        if (empty($club)) {
            Flash::error('Club not found');

            return redirect(route('clubs.index'));
        }

        $this->clubRepository->delete($id);

        Flash::success('Club deleted successfully.');

        return redirect(route('clubs.index'));
    }
}

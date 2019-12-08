<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelibrarianRequest;
use App\Http\Requests\UpdatelibrarianRequest;
use App\Repositories\librarianRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class librarianController extends AppBaseController
{
    /** @var  librarianRepository */
    private $librarianRepository;

    public function __construct(librarianRepository $librarianRepo)
    {
        $this->librarianRepository = $librarianRepo;
    }

    /**
     * Display a listing of the librarian.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $librarians = $this->librarianRepository->all();

        return view('librarians.index')
            ->with('librarians', $librarians);
    }

    /**
     * Show the form for creating a new librarian.
     *
     * @return Response
     */
    public function create()
    {
        return view('librarians.create');
    }

    /**
     * Store a newly created librarian in storage.
     *
     * @param CreatelibrarianRequest $request
     *
     * @return Response
     */
    public function store(CreatelibrarianRequest $request)
    {
        $input = $request->all();

        $librarian = $this->librarianRepository->create($input);

        Flash::success('Librarian saved successfully.');

        return redirect(route('librarians.index'));
    }

    /**
     * Display the specified librarian.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $librarian = $this->librarianRepository->find($id);

        if (empty($librarian)) {
            Flash::error('Librarian not found');

            return redirect(route('librarians.index'));
        }

        return view('librarians.show')->with('librarian', $librarian);
    }

    /**
     * Show the form for editing the specified librarian.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $librarian = $this->librarianRepository->find($id);

        if (empty($librarian)) {
            Flash::error('Librarian not found');

            return redirect(route('librarians.index'));
        }

        return view('librarians.edit')->with('librarian', $librarian);
    }

    /**
     * Update the specified librarian in storage.
     *
     * @param int $id
     * @param UpdatelibrarianRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelibrarianRequest $request)
    {
        $librarian = $this->librarianRepository->find($id);

        if (empty($librarian)) {
            Flash::error('Librarian not found');

            return redirect(route('librarians.index'));
        }

        $librarian = $this->librarianRepository->update($request->all(), $id);

        Flash::success('Librarian updated successfully.');

        return redirect(route('librarians.index'));
    }

    /**
     * Remove the specified librarian from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $librarian = $this->librarianRepository->find($id);

        if (empty($librarian)) {
            Flash::error('Librarian not found');

            return redirect(route('librarians.index'));
        }

        $this->librarianRepository->delete($id);

        Flash::success('Librarian deleted successfully.');

        return redirect(route('librarians.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclassRequest;
use App\Http\Requests\UpdateclassRequest;
use App\Repositories\classRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class classController extends AppBaseController
{
    /** @var  classRepository */
    private $classRepository;

    public function __construct(classRepository $classRepo)
    {
        $this->classRepository = $classRepo;
    }

    /**
     * Display a listing of the class.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $classes = $this->classRepository->all();

        return view('classes.index')
            ->with('classes', $classes);
    }

    /**
     * Show the form for creating a new class.
     *
     * @return Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created class in storage.
     *
     * @param CreateclassRequest $request
     *
     * @return Response
     */
    public function store(CreateclassRequest $request)
    {
        $input = $request->all();

        $class = $this->classRepository->create($input);

        Flash::success('Class saved successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('class', $class);
    }

    /**
     * Show the form for editing the specified class.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        return view('classes.edit')->with('class', $class);
    }

    /**
     * Update the specified class in storage.
     *
     * @param int $id
     * @param UpdateclassRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclassRequest $request)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        $class = $this->classRepository->update($request->all(), $id);

        Flash::success('Class updated successfully.');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified class from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $class = $this->classRepository->find($id);

        if (empty($class)) {
            Flash::error('Class not found');

            return redirect(route('classes.index'));
        }

        $this->classRepository->delete($id);

        Flash::success('Class deleted successfully.');

        return redirect(route('classes.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterevisionRequest;
use App\Http\Requests\UpdaterevisionRequest;
use App\Repositories\revisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class revisionController extends AppBaseController
{
    /** @var  revisionRepository */
    private $revisionRepository;

    public function __construct(revisionRepository $revisionRepo)
    {
        $this->revisionRepository = $revisionRepo;
    }

    /**
     * Display a listing of the revision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $revisions = $this->revisionRepository->all();

        return view('revisions.index')
            ->with('revisions', $revisions);
    }

    /**
     * Show the form for creating a new revision.
     *
     * @return Response
     */
    public function create()
    {
        return view('revisions.create');
    }

    /**
     * Store a newly created revision in storage.
     *
     * @param CreaterevisionRequest $request
     *
     * @return Response
     */
    public function store(CreaterevisionRequest $request)
    {
        $input = $request->all();

        $revision = $this->revisionRepository->create($input);

        Flash::success('Revision saved successfully.');

        return redirect(route('revisions.index'));
    }

    /**
     * Display the specified revision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $revision = $this->revisionRepository->find($id);

        if (empty($revision)) {
            Flash::error('Revision not found');

            return redirect(route('revisions.index'));
        }

        return view('revisions.show')->with('revision', $revision);
    }

    /**
     * Show the form for editing the specified revision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $revision = $this->revisionRepository->find($id);

        if (empty($revision)) {
            Flash::error('Revision not found');

            return redirect(route('revisions.index'));
        }

        return view('revisions.edit')->with('revision', $revision);
    }

    /**
     * Update the specified revision in storage.
     *
     * @param int $id
     * @param UpdaterevisionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterevisionRequest $request)
    {
        $revision = $this->revisionRepository->find($id);

        if (empty($revision)) {
            Flash::error('Revision not found');

            return redirect(route('revisions.index'));
        }

        $revision = $this->revisionRepository->update($request->all(), $id);

        Flash::success('Revision updated successfully.');

        return redirect(route('revisions.index'));
    }

    /**
     * Remove the specified revision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $revision = $this->revisionRepository->find($id);

        if (empty($revision)) {
            Flash::error('Revision not found');

            return redirect(route('revisions.index'));
        }

        $this->revisionRepository->delete($id);

        Flash::success('Revision deleted successfully.');

        return redirect(route('revisions.index'));
    }
}

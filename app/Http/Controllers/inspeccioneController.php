<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinspeccioneRequest;
use App\Http\Requests\UpdateinspeccioneRequest;
use App\Repositories\inspeccioneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class inspeccioneController extends AppBaseController
{
    /** @var  inspeccioneRepository */
    private $inspeccioneRepository;

    public function __construct(inspeccioneRepository $inspeccioneRepo)
    {
        $this->inspeccioneRepository = $inspeccioneRepo;
    }

    /**
     * Display a listing of the inspeccione.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inspecciones = $this->inspeccioneRepository->all();

        return view('inspecciones.index')
            ->with('inspecciones', $inspecciones);
    }

    /**
     * Show the form for creating a new inspeccione.
     *
     * @return Response
     */
    public function create()
    {
        return view('inspecciones.create');
    }

    /**
     * Store a newly created inspeccione in storage.
     *
     * @param CreateinspeccioneRequest $request
     *
     * @return Response
     */
    public function store(CreateinspeccioneRequest $request)
    {
        $input = $request->all();

        $inspeccione = $this->inspeccioneRepository->create($input);

        Flash::success('Inspeccione saved successfully.');

        return redirect(route('inspecciones.index'));
    }

    /**
     * Display the specified inspeccione.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inspeccione = $this->inspeccioneRepository->find($id);

        if (empty($inspeccione)) {
            Flash::error('Inspeccione not found');

            return redirect(route('inspecciones.index'));
        }

        return view('inspecciones.show')->with('inspeccione', $inspeccione);
    }

    /**
     * Show the form for editing the specified inspeccione.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inspeccione = $this->inspeccioneRepository->find($id);

        if (empty($inspeccione)) {
            Flash::error('Inspeccione not found');

            return redirect(route('inspecciones.index'));
        }

        return view('inspecciones.edit')->with('inspeccione', $inspeccione);
    }

    /**
     * Update the specified inspeccione in storage.
     *
     * @param int $id
     * @param UpdateinspeccioneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinspeccioneRequest $request)
    {
        $inspeccione = $this->inspeccioneRepository->find($id);

        if (empty($inspeccione)) {
            Flash::error('Inspeccione not found');

            return redirect(route('inspecciones.index'));
        }

        $inspeccione = $this->inspeccioneRepository->update($request->all(), $id);

        Flash::success('Inspeccione updated successfully.');

        return redirect(route('inspecciones.index'));
    }

    /**
     * Remove the specified inspeccione from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inspeccione = $this->inspeccioneRepository->find($id);

        if (empty($inspeccione)) {
            Flash::error('Inspeccione not found');

            return redirect(route('inspecciones.index'));
        }

        $this->inspeccioneRepository->delete($id);

        Flash::success('Inspeccione deleted successfully.');

        return redirect(route('inspecciones.index'));
    }
}

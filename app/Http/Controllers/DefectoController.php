<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDefectoRequest;
use App\Http\Requests\UpdateDefectoRequest;
use App\Repositories\DefectoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DefectoController extends AppBaseController
{
    /** @var  DefectoRepository */
    private $defectoRepository;

    public function __construct(DefectoRepository $defectoRepo)
    {
        $this->defectoRepository = $defectoRepo;
    }

    /**
     * Display a listing of the Defecto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $defectos = $this->defectoRepository->all();

        return view('defectos.index')
            ->with('defectos', $defectos);
    }

    /**
     * Show the form for creating a new Defecto.
     *
     * @return Response
     */
    public function create()
    {
        return view('defectos.create');
    }

    /**
     * Store a newly created Defecto in storage.
     *
     * @param CreateDefectoRequest $request
     *
     * @return Response
     */
    public function store(CreateDefectoRequest $request)
    {
        $input = $request->all();

        $defecto = $this->defectoRepository->create($input);

        Flash::success('Defecto saved successfully.');

        return redirect(route('defectos.index'));
    }

    /**
     * Display the specified Defecto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $defecto = $this->defectoRepository->find($id);

        if (empty($defecto)) {
            Flash::error('Defecto not found');

            return redirect(route('defectos.index'));
        }

        return view('defectos.show')->with('defecto', $defecto);
    }

    /**
     * Show the form for editing the specified Defecto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $defecto = $this->defectoRepository->find($id);

        if (empty($defecto)) {
            Flash::error('Defecto not found');

            return redirect(route('defectos.index'));
        }

        return view('defectos.edit')->with('defecto', $defecto);
    }

    /**
     * Update the specified Defecto in storage.
     *
     * @param int $id
     * @param UpdateDefectoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDefectoRequest $request)
    {
        $defecto = $this->defectoRepository->find($id);

        if (empty($defecto)) {
            Flash::error('Defecto not found');

            return redirect(route('defectos.index'));
        }

        $defecto = $this->defectoRepository->update($request->all(), $id);

        Flash::success('Defecto updated successfully.');

        return redirect(route('defectos.index'));
    }

    /**
     * Remove the specified Defecto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $defecto = $this->defectoRepository->find($id);

        if (empty($defecto)) {
            Flash::error('Defecto not found');

            return redirect(route('defectos.index'));
        }

        $this->defectoRepository->delete($id);

        Flash::success('Defecto deleted successfully.');

        return redirect(route('defectos.index'));
    }
}

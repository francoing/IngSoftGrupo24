<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupervisor_de_calidadRequest;
use App\Http\Requests\UpdateSupervisor_de_calidadRequest;
use App\Repositories\Supervisor_de_calidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Turno;
use App\User;
use App\Models\Orden_de_produccion;



class Supervisor_de_calidadController extends AppBaseController
{
    /** @var  Supervisor_de_calidadRepository */
    private $supervisorDeCalidadRepository;

    public function __construct(Supervisor_de_calidadRepository $supervisorDeCalidadRepo)
    {
        $this->supervisorDeCalidadRepository = $supervisorDeCalidadRepo;
    }

    /**
     * Display a listing of the Supervisor_de_calidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $supervisorDeCalidads = $this->supervisorDeCalidadRepository->all();

        

        return view('supervisor_de_calidads.index')
            ->with('supervisorDeCalidads', $supervisorDeCalidads);
    }

    /**
     * Show the form for creating a new Supervisor_de_calidad.
     *
     * @return Response
     */
    public function create()
    {
        $usuarios=User::pluck('email','id');
        $turnos=Turno::pluck('descripcion','id');
        $op=Orden_de_produccion::pluck('id','id');
        return view('supervisor_de_calidads.create',compact('turnos','usuarios','op'));
    }

    /**
     * Store a newly created Supervisor_de_calidad in storage.
     *
     * @param CreateSupervisor_de_calidadRequest $request
     *
     * @return Response
     */
    public function store(CreateSupervisor_de_calidadRequest $request)
    {
        $input = $request->all();

        $supervisorDeCalidad = $this->supervisorDeCalidadRepository->create($input);

        Flash::success('Supervisor De Calidad saved successfully.');

        return redirect(route('supervisorDeCalidads.index'));
    }

    /**
     * Display the specified Supervisor_de_calidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $supervisorDeCalidad = $this->supervisorDeCalidadRepository->find($id);

        if (empty($supervisorDeCalidad)) {
            Flash::error('Supervisor De Calidad not found');

            return redirect(route('supervisorDeCalidads.index'));
        }

        return view('supervisor_de_calidads.show')->with('supervisorDeCalidad', $supervisorDeCalidad);
    }

    /**
     * Show the form for editing the specified Supervisor_de_calidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $supervisorDeCalidad = $this->supervisorDeCalidadRepository->find($id);

        if (empty($supervisorDeCalidad)) {
            Flash::error('Supervisor De Calidad not found');

            return redirect(route('supervisorDeCalidads.index'));
        }

        return view('supervisor_de_calidads.edit')->with('supervisorDeCalidad', $supervisorDeCalidad);
    }

    /**
     * Update the specified Supervisor_de_calidad in storage.
     *
     * @param int $id
     * @param UpdateSupervisor_de_calidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSupervisor_de_calidadRequest $request)
    {
        $supervisorDeCalidad = $this->supervisorDeCalidadRepository->find($id);

        if (empty($supervisorDeCalidad)) {
            Flash::error('Supervisor De Calidad not found');

            return redirect(route('supervisorDeCalidads.index'));
        }

        $supervisorDeCalidad = $this->supervisorDeCalidadRepository->update($request->all(), $id);

        Flash::success('Supervisor De Calidad updated successfully.');

        return redirect(route('supervisorDeCalidads.index'));
    }

    /**
     * Remove the specified Supervisor_de_calidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $supervisorDeCalidad = $this->supervisorDeCalidadRepository->find($id);

        if (empty($supervisorDeCalidad)) {
            Flash::error('Supervisor De Calidad not found');

            return redirect(route('supervisorDeCalidads.index'));
        }

        $this->supervisorDeCalidadRepository->delete($id);

        Flash::success('Supervisor De Calidad deleted successfully.');

        return redirect(route('supervisorDeCalidads.index'));
    }
}

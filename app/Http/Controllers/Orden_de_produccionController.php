<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrden_de_produccionRequest;
use App\Http\Requests\UpdateOrden_de_produccionRequest;
use App\Repositories\Orden_de_produccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Linea_de_produccion;
use DB;

class Orden_de_produccionController extends AppBaseController
{
    /** @var  Orden_de_produccionRepository */
    private $ordenDeProduccionRepository;

    public function __construct(Orden_de_produccionRepository $ordenDeProduccionRepo)
    {
        $this->ordenDeProduccionRepository = $ordenDeProduccionRepo;
    }

    /**
     * Display a listing of the Orden_de_produccion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ordenDeProduccions = $this->ordenDeProduccionRepository->all();

        return view('orden_de_produccions.index')
            ->with('ordenDeProduccions', $ordenDeProduccions);
    }

    /**
     * Show the form for creating a new Orden_de_produccion.
     *
     * @return Response
     */
    public function create()
    {
        // $lineas=Linea_de_produccion::pluck('codigoLinea_de_produccion','id');
        $lineas=DB::table('linea_de_produccions')
        ->where('asigOP','sin_asignar')
        ->select('codigoLinea_de_produccion','id')
        ->get();
         
        return view('orden_de_produccions.create',compact('lineas'));
    }

    /**
     * Store a newly created Orden_de_produccion in storage.
     *
     * @param CreateOrden_de_produccionRequest $request
     *
     * @return Response
     */
    public function store(CreateOrden_de_produccionRequest $request)
    {
        $input = $request->all();


        $ordenDeProduccion = $this->ordenDeProduccionRepository->create($input);

        $linea_id= $request->linea_id;
        $estado = DB::table('linea_de_produccions')
        ->where('id',$linea_id)
        ->update(['asigOP'=>'asignada']);

        Flash::success('Orden De Produccion saved successfully.');

        return redirect(route('ordenDeProduccions.index'));
    }

    /**
     * Display the specified Orden_de_produccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordenDeProduccion = $this->ordenDeProduccionRepository->find($id);

        if (empty($ordenDeProduccion)) {
            Flash::error('Orden De Produccion not found');

            return redirect(route('ordenDeProduccions.index'));
        }

        return view('orden_de_produccions.show')->with('ordenDeProduccion', $ordenDeProduccion);
    }

    /**
     * Show the form for editing the specified Orden_de_produccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordenDeProduccion = $this->ordenDeProduccionRepository->find($id);

        if (empty($ordenDeProduccion)) {
            Flash::error('Orden De Produccion not found');

            return redirect(route('ordenDeProduccions.index'));
        }

        return view('orden_de_produccions.edit')->with('ordenDeProduccion', $ordenDeProduccion);
    }

    /**
     * Update the specified Orden_de_produccion in storage.
     *
     * @param int $id
     * @param UpdateOrden_de_produccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrden_de_produccionRequest $request)
    {
        $ordenDeProduccion = $this->ordenDeProduccionRepository->find($id);

        if (empty($ordenDeProduccion)) {
            Flash::error('Orden De Produccion not found');

            return redirect(route('ordenDeProduccions.index'));
        }

        $ordenDeProduccion = $this->ordenDeProduccionRepository->update($request->all(), $id);

        Flash::success('Orden De Produccion updated successfully.');

        return redirect(route('ordenDeProduccions.index'));
    }

    /**
     * Remove the specified Orden_de_produccion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordenDeProduccion = $this->ordenDeProduccionRepository->find($id);

        if (empty($ordenDeProduccion)) {
            Flash::error('Orden De Produccion not found');

            return redirect(route('ordenDeProduccions.index'));
        }

        $this->ordenDeProduccionRepository->delete($id);

        Flash::success('Orden De Produccion deleted successfully.');

        return redirect(route('ordenDeProduccions.index'));
    }
}

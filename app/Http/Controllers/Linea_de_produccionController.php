<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLinea_de_produccionRequest;
use App\Http\Requests\UpdateLinea_de_produccionRequest;
use App\Repositories\Linea_de_produccionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Modelo;

class Linea_de_produccionController extends AppBaseController
{
    /** @var  Linea_de_produccionRepository */
    private $lineaDeProduccionRepository;

    public function __construct(Linea_de_produccionRepository $lineaDeProduccionRepo)
    {
        $this->lineaDeProduccionRepository = $lineaDeProduccionRepo;
    }

    /**
     * Display a listing of the Linea_de_produccion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lineaDeProduccions = $this->lineaDeProduccionRepository->all();

        return view('linea_de_produccions.index')
            ->with('lineaDeProduccions', $lineaDeProduccions);
    }

    /**
     * Show the form for creating a new Linea_de_produccion.
     *
     * @return Response
     */
    public function create()
    {
        $modelos=Modelo::pluck('sku','id');
        return view('linea_de_produccions.create',compact('modelos'));
    }

    /**
     * Store a newly created Linea_de_produccion in storage.
     *
     * @param CreateLinea_de_produccionRequest $request
     *
     * @return Response
     */
    public function store(CreateLinea_de_produccionRequest $request)
    {
        $input = $request->all();

        $lineaDeProduccion = $this->lineaDeProduccionRepository->create($input);

        Flash::success('Linea De Produccion creada correctamente.');

        return redirect(route('lineaDeProduccions.index'));
    }

    /**
     * Display the specified Linea_de_produccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lineaDeProduccion = $this->lineaDeProduccionRepository->find($id);

        if (empty($lineaDeProduccion)) {
            Flash::error('Linea De Produccion no encontrada');

            return redirect(route('lineaDeProduccions.index'));
        }

        return view('linea_de_produccions.show')->with('lineaDeProduccion', $lineaDeProduccion);
    }

    /**
     * Show the form for editing the specified Linea_de_produccion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lineaDeProduccion = $this->lineaDeProduccionRepository->find($id);

        if (empty($lineaDeProduccion)) {
            Flash::error('Linea De Produccion no encontrada');

            return redirect(route('lineaDeProduccions.index'));
        }

        return view('linea_de_produccions.edit')->with('lineaDeProduccion', $lineaDeProduccion);
    }

    /**
     * Update the specified Linea_de_produccion in storage.
     *
     * @param int $id
     * @param UpdateLinea_de_produccionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLinea_de_produccionRequest $request)
    {
        $lineaDeProduccion = $this->lineaDeProduccionRepository->find($id);

        if (empty($lineaDeProduccion)) {
            Flash::error('Linea De Produccion not found');

            return redirect(route('lineaDeProduccions.index'));
        }

        $lineaDeProduccion = $this->lineaDeProduccionRepository->update($request->all(), $id);

        Flash::success('Linea De Produccion updated successfully.');

        return redirect(route('lineaDeProduccions.index'));
    }

    /**
     * Remove the specified Linea_de_produccion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lineaDeProduccion = $this->lineaDeProduccionRepository->find($id);

        if (empty($lineaDeProduccion)) {
            Flash::error('Linea De Produccion not found');

            return redirect(route('lineaDeProduccions.index'));
        }

        $this->lineaDeProduccionRepository->delete($id);

        Flash::success('Linea De Produccion deleted successfully.');

        return redirect(route('lineaDeProduccions.index'));
    }
}

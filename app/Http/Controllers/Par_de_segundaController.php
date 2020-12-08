<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePar_de_segundaRequest;
use App\Http\Requests\UpdatePar_de_segundaRequest;
use App\Repositories\Par_de_segundaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Linea_de_produccion;
use App\Models\Login;

class Par_de_segundaController extends AppBaseController
{
    /** @var  Par_de_segundaRepository */
    private $parDeSegundaRepository;

    public function __construct(Par_de_segundaRepository $parDeSegundaRepo)
    {
        $this->parDeSegundaRepository = $parDeSegundaRepo;
    }

    /**
     * Display a listing of the Par_de_segunda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parDeSegundas = $this->parDeSegundaRepository->all();

        return view('par_de_segundas.index')
            ->with('parDeSegundas', $parDeSegundas);
    }

    /**
     * Show the form for creating a new Par_de_segunda.
     *
     * @return Response
     */
    public function create()
    {
        $supervisores = Login::pluck('nombre_completo','id');
        $lineas=Linea_de_produccion::pluck('codigoLinea_de_produccion','id');
        return view('par_de_segundas.create', compact('lineas','supervisores'));
    }

    /**
     * Store a newly created Par_de_segunda in storage.
     *
     * @param CreatePar_de_segundaRequest $request
     *
     * @return Response
     */
    public function store(CreatePar_de_segundaRequest $request)
    {
        $input = $request->all();

        $parDeSegunda = $this->parDeSegundaRepository->create($input);

        Flash::success('Par De Segunda saved successfully.');

        return redirect(route('parDeSegundas.index'));
    }

    /**
     * Display the specified Par_de_segunda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parDeSegunda = $this->parDeSegundaRepository->find($id);

        if (empty($parDeSegunda)) {
            Flash::error('Par De Segunda not found');

            return redirect(route('parDeSegundas.index'));
        }

        return view('par_de_segundas.show')->with('parDeSegunda', $parDeSegunda);
    }

    /**
     * Show the form for editing the specified Par_de_segunda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parDeSegunda = $this->parDeSegundaRepository->find($id);

        if (empty($parDeSegunda)) {
            Flash::error('Par De Segunda not found');

            return redirect(route('parDeSegundas.index'));
        }

        return view('par_de_segundas.edit')->with('parDeSegunda', $parDeSegunda);
    }

    /**
     * Update the specified Par_de_segunda in storage.
     *
     * @param int $id
     * @param UpdatePar_de_segundaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePar_de_segundaRequest $request)
    {
        $parDeSegunda = $this->parDeSegundaRepository->find($id);

        if (empty($parDeSegunda)) {
            Flash::error('Par De Segunda not found');

            return redirect(route('parDeSegundas.index'));
        }

        $parDeSegunda = $this->parDeSegundaRepository->update($request->all(), $id);

        Flash::success('Par De Segunda updated successfully.');

        return redirect(route('parDeSegundas.index'));
    }

    /**
     * Remove the specified Par_de_segunda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parDeSegunda = $this->parDeSegundaRepository->find($id);

        if (empty($parDeSegunda)) {
            Flash::error('Par De Segunda not found');

            return redirect(route('parDeSegundas.index'));
        }

        $this->parDeSegundaRepository->delete($id);

        Flash::success('Par De Segunda deleted successfully.');

        return redirect(route('parDeSegundas.index'));
    }
}

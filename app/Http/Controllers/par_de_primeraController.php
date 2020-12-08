<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createpar_de_primeraRequest;
use App\Http\Requests\Updatepar_de_primeraRequest;
use App\Repositories\par_de_primeraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class par_de_primeraController extends AppBaseController
{
    /** @var  par_de_primeraRepository */
    private $parDePrimeraRepository;

    public function __construct(par_de_primeraRepository $parDePrimeraRepo)
    {
        $this->parDePrimeraRepository = $parDePrimeraRepo;
    }

    /**
     * Display a listing of the par_de_primera.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parDePrimeras = $this->parDePrimeraRepository->all();

        return view('par_de_primeras.index')
            ->with('parDePrimeras', $parDePrimeras);
    }

    /**
     * Show the form for creating a new par_de_primera.
     *
     * @return Response
     */
    public function create()
    {
        return view('par_de_primeras.create');
    }

    /**
     * Store a newly created par_de_primera in storage.
     *
     * @param Createpar_de_primeraRequest $request
     *
     * @return Response
     */
    public function store(Createpar_de_primeraRequest $request)
    {
        $input = $request->all();

        $parDePrimera = $this->parDePrimeraRepository->create($input);

        Flash::success('Par De Primera saved successfully.');

        return redirect(route('parDePrimeras.index'));
    }

    /**
     * Display the specified par_de_primera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parDePrimera = $this->parDePrimeraRepository->find($id);

        if (empty($parDePrimera)) {
            Flash::error('Par De Primera not found');

            return redirect(route('parDePrimeras.index'));
        }

        return view('par_de_primeras.show')->with('parDePrimera', $parDePrimera);
    }

    /**
     * Show the form for editing the specified par_de_primera.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parDePrimera = $this->parDePrimeraRepository->find($id);

        if (empty($parDePrimera)) {
            Flash::error('Par De Primera not found');

            return redirect(route('parDePrimeras.index'));
        }

        return view('par_de_primeras.edit')->with('parDePrimera', $parDePrimera);
    }

    /**
     * Update the specified par_de_primera in storage.
     *
     * @param int $id
     * @param Updatepar_de_primeraRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepar_de_primeraRequest $request)
    {
        $parDePrimera = $this->parDePrimeraRepository->find($id);

        if (empty($parDePrimera)) {
            Flash::error('Par De Primera not found');

            return redirect(route('parDePrimeras.index'));
        }

        $parDePrimera = $this->parDePrimeraRepository->update($request->all(), $id);

        Flash::success('Par De Primera updated successfully.');

        return redirect(route('parDePrimeras.index'));
    }

    /**
     * Remove the specified par_de_primera from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parDePrimera = $this->parDePrimeraRepository->find($id);

        if (empty($parDePrimera)) {
            Flash::error('Par De Primera not found');

            return redirect(route('parDePrimeras.index'));
        }

        $this->parDePrimeraRepository->delete($id);

        Flash::success('Par De Primera deleted successfully.');

        return redirect(route('parDePrimeras.index'));
    }
}

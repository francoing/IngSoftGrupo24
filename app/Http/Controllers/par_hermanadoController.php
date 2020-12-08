<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createpar_hermanadoRequest;
use App\Http\Requests\Updatepar_hermanadoRequest;
use App\Repositories\par_hermanadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class par_hermanadoController extends AppBaseController
{
    /** @var  par_hermanadoRepository */
    private $parHermanadoRepository;

    public function __construct(par_hermanadoRepository $parHermanadoRepo)
    {
        $this->parHermanadoRepository = $parHermanadoRepo;
    }

    /**
     * Display a listing of the par_hermanado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parHermanados = $this->parHermanadoRepository->all();

        return view('par_hermanados.index')
            ->with('parHermanados', $parHermanados);
    }

    /**
     * Show the form for creating a new par_hermanado.
     *
     * @return Response
     */
    public function create()
    {
        return view('par_hermanados.create');
    }

    /**
     * Store a newly created par_hermanado in storage.
     *
     * @param Createpar_hermanadoRequest $request
     *
     * @return Response
     */
    public function store(Createpar_hermanadoRequest $request)
    {
        $input = $request->all();

        $parHermanado = $this->parHermanadoRepository->create($input);

        Flash::success('Par Hermanado saved successfully.');

        return redirect(route('parHermanados.index'));
    }

    /**
     * Display the specified par_hermanado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parHermanado = $this->parHermanadoRepository->find($id);

        if (empty($parHermanado)) {
            Flash::error('Par Hermanado not found');

            return redirect(route('parHermanados.index'));
        }

        return view('par_hermanados.show')->with('parHermanado', $parHermanado);
    }

    /**
     * Show the form for editing the specified par_hermanado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parHermanado = $this->parHermanadoRepository->find($id);

        if (empty($parHermanado)) {
            Flash::error('Par Hermanado not found');

            return redirect(route('parHermanados.index'));
        }

        return view('par_hermanados.edit')->with('parHermanado', $parHermanado);
    }

    /**
     * Update the specified par_hermanado in storage.
     *
     * @param int $id
     * @param Updatepar_hermanadoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepar_hermanadoRequest $request)
    {
        $parHermanado = $this->parHermanadoRepository->find($id);

        if (empty($parHermanado)) {
            Flash::error('Par Hermanado not found');

            return redirect(route('parHermanados.index'));
        }

        $parHermanado = $this->parHermanadoRepository->update($request->all(), $id);

        Flash::success('Par Hermanado updated successfully.');

        return redirect(route('parHermanados.index'));
    }

    /**
     * Remove the specified par_hermanado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parHermanado = $this->parHermanadoRepository->find($id);

        if (empty($parHermanado)) {
            Flash::error('Par Hermanado not found');

            return redirect(route('parHermanados.index'));
        }

        $this->parHermanadoRepository->delete($id);

        Flash::success('Par Hermanado deleted successfully.');

        return redirect(route('parHermanados.index'));
    }
}

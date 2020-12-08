<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Repositories\LoginRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LoginController extends AppBaseController
{
    /** @var  LoginRepository */
    private $loginRepository;

    public function __construct(LoginRepository $loginRepo)
    {
        $this->loginRepository = $loginRepo;
    }

    /**
     * Display a listing of the Login.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $logins = $this->loginRepository->all();

        return view('logins.index')
            ->with('logins', $logins);
    }

    /**
     * Show the form for creating a new Login.
     *
     * @return Response
     */
    public function create()
    {
        return view('logins.create');
    }

    /**
     * Store a newly created Login in storage.
     *
     * @param CreateLoginRequest $request
     *
     * @return Response
     */
    public function store(CreateLoginRequest $request)
    {
        $input = $request->all();

        $login = $this->loginRepository->create($input);

        Flash::success('Login saved successfully.');

        return redirect(route('logins.index'));
    }

    /**
     * Display the specified Login.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('Login not found');

            return redirect(route('logins.index'));
        }

        return view('logins.show')->with('login', $login);
    }

    /**
     * Show the form for editing the specified Login.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('Login not found');

            return redirect(route('logins.index'));
        }

        return view('logins.edit')->with('login', $login);
    }

    /**
     * Update the specified Login in storage.
     *
     * @param int $id
     * @param UpdateLoginRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLoginRequest $request)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('Login not found');

            return redirect(route('logins.index'));
        }

        $login = $this->loginRepository->update($request->all(), $id);

        Flash::success('Login updated successfully.');

        return redirect(route('logins.index'));
    }

    /**
     * Remove the specified Login from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $login = $this->loginRepository->find($id);

        if (empty($login)) {
            Flash::error('Login not found');

            return redirect(route('logins.index'));
        }

        $this->loginRepository->delete($id);

        Flash::success('Login deleted successfully.');

        return redirect(route('logins.index'));
    }
}

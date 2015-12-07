<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

use CodeDelivery\Http\Controllers\Controller;

class ClientController extends Controller
{

    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;


    public function __construct(ClientRepository $repository, UserRepository $userRepository)
    {

        $this->repository = $repository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $clients = $this->repository->paginate(10);
        return view('admin.clients.index', compact('clients'));

    }

    public function create()
    {
        $users = $this->userRepository->lists();
        return view('admin.clients.create',compact('users'));
    }

    public function store(AdminClientRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $client = $this->repository->find($id);
        $users = $this->userRepository->lists();
        return view('admin.clients.edit', compact('client', 'users'));
    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.clients.index');
    }
}
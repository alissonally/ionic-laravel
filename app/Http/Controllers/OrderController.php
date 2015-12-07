<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminCategoryRequest;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

use CodeDelivery\Http\Controllers\Controller;

class OrderController extends Controller
{

    /**
     * @var CategoryRepository
     */
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(OrderRepository $repository, UserRepository $userRepository)
    {

        $this->repository = $repository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $orders = $this->repository->paginate(5);

        return view('admin.orders.index', compact('orders'));

    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $orders = $this->repository->find($id);
        $users = $this->userRepository->lists();
        return view('admin.orders.edit', compact('orders','users'));
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.categories.index');
    }

    public function items($id){

    }
}

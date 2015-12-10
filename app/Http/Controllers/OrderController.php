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

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate(10);

        return view('admin.orders.index', compact('orders'));

    }

    public function edit($id, UserRepository $userRepository)
    {
        $list_status = [0=>'Pendente', 1=>'A Caminho', 2=>'Entregue', 3=>'Cancelado'];
        $order = $this->repository->find($id);
        $deliverymen = $userRepository->get_delivery_man();
        return view('admin.orders.edit', compact('order', 'list_status', 'deliverymen'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.orders.index');
    }
}

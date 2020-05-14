<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaterial_orderRequest;
use App\Http\Requests\UpdateMaterial_orderRequest;
use App\Repositories\Material_orderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Material_orderController extends AppBaseController
{
    /** @var  Material_orderRepository */
    private $materialOrderRepository;

    public function __construct(Material_orderRepository $materialOrderRepo)
    {
        $this->materialOrderRepository = $materialOrderRepo;
    }

    /**
     * Display a listing of the Material_order.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->materialOrderRepository->pushCriteria(new RequestCriteria($request));
        $materialOrders = $this->materialOrderRepository->all();

        return view('material_orders.index')
            ->with('materialOrders', $materialOrders);
    }

    /**
     * Show the form for creating a new Material_order.
     *
     * @return Response
     */
    public function create()
    {
        return view('material_orders.create');
    }

    /**
     * Store a newly created Material_order in storage.
     *
     * @param CreateMaterial_orderRequest $request
     *
     * @return Response
     */
    public function store(CreateMaterial_orderRequest $request)
    {
        $input = $request->all();

        $materialOrder = $this->materialOrderRepository->create($input);

        Flash::success('Material Order saved successfully.');

        return redirect(route('materialOrders.index'));
    }

    /**
     * Display the specified Material_order.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materialOrder = $this->materialOrderRepository->findWithoutFail($id);

        if (empty($materialOrder)) {
            Flash::error('Material Order not found');

            return redirect(route('materialOrders.index'));
        }

        return view('material_orders.show')->with('materialOrder', $materialOrder);
    }

    /**
     * Show the form for editing the specified Material_order.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materialOrder = $this->materialOrderRepository->findWithoutFail($id);

        if (empty($materialOrder)) {
            Flash::error('Material Order not found');

            return redirect(route('materialOrders.index'));
        }

        return view('material_orders.edit')->with('materialOrder', $materialOrder);
    }

    /**
     * Update the specified Material_order in storage.
     *
     * @param  int              $id
     * @param UpdateMaterial_orderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaterial_orderRequest $request)
    {
        $materialOrder = $this->materialOrderRepository->findWithoutFail($id);

        if (empty($materialOrder)) {
            Flash::error('Material Order not found');

            return redirect(route('materialOrders.index'));
        }

        $materialOrder = $this->materialOrderRepository->update($request->all(), $id);

        Flash::success('Material Order updated successfully.');

        return redirect(route('materialOrders.index'));
    }

    /**
     * Remove the specified Material_order from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materialOrder = $this->materialOrderRepository->findWithoutFail($id);

        if (empty($materialOrder)) {
            Flash::error('Material Order not found');

            return redirect(route('materialOrders.index'));
        }

        $this->materialOrderRepository->delete($id);

        Flash::success('Material Order deleted successfully.');

        return redirect(route('materialOrders.index'));
    }
}

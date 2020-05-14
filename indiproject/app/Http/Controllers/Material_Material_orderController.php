<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaterial_Material_orderRequest;
use App\Http\Requests\UpdateMaterial_Material_orderRequest;
use App\Repositories\Material_Material_orderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Material_Material_orderController extends AppBaseController
{
    /** @var  Material_Material_orderRepository */
    private $materialMaterialOrderRepository;

    public function __construct(Material_Material_orderRepository $materialMaterialOrderRepo)
    {
        $this->materialMaterialOrderRepository = $materialMaterialOrderRepo;
    }

    /**
     * Display a listing of the Material_Material_order.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->materialMaterialOrderRepository->pushCriteria(new RequestCriteria($request));
        $materialMaterialOrders = $this->materialMaterialOrderRepository->all();

        return view('material__material_orders.index')
            ->with('materialMaterialOrders', $materialMaterialOrders);
    }

    /**
     * Show the form for creating a new Material_Material_order.
     *
     * @return Response
     */
    public function create()
    {
        return view('material__material_orders.create');
    }

    /**
     * Store a newly created Material_Material_order in storage.
     *
     * @param CreateMaterial_Material_orderRequest $request
     *
     * @return Response
     */
    public function store(CreateMaterial_Material_orderRequest $request)
    {
        $input = $request->all();

        $materialMaterialOrder = $this->materialMaterialOrderRepository->create($input);

        Flash::success('Material  Material Order saved successfully.');

        return redirect(route('materialMaterialOrders.index'));
    }

    /**
     * Display the specified Material_Material_order.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materialMaterialOrder = $this->materialMaterialOrderRepository->findWithoutFail($id);

        if (empty($materialMaterialOrder)) {
            Flash::error('Material  Material Order not found');

            return redirect(route('materialMaterialOrders.index'));
        }

        return view('material__material_orders.show')->with('materialMaterialOrder', $materialMaterialOrder);
    }

    /**
     * Show the form for editing the specified Material_Material_order.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materialMaterialOrder = $this->materialMaterialOrderRepository->findWithoutFail($id);

        if (empty($materialMaterialOrder)) {
            Flash::error('Material  Material Order not found');

            return redirect(route('materialMaterialOrders.index'));
        }

        return view('material__material_orders.edit')->with('materialMaterialOrder', $materialMaterialOrder);
    }

    /**
     * Update the specified Material_Material_order in storage.
     *
     * @param  int              $id
     * @param UpdateMaterial_Material_orderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaterial_Material_orderRequest $request)
    {
        $materialMaterialOrder = $this->materialMaterialOrderRepository->findWithoutFail($id);

        if (empty($materialMaterialOrder)) {
            Flash::error('Material  Material Order not found');

            return redirect(route('materialMaterialOrders.index'));
        }

        $materialMaterialOrder = $this->materialMaterialOrderRepository->update($request->all(), $id);

        Flash::success('Material  Material Order updated successfully.');

        return redirect(route('materialMaterialOrders.index'));
    }

    /**
     * Remove the specified Material_Material_order from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materialMaterialOrder = $this->materialMaterialOrderRepository->findWithoutFail($id);

        if (empty($materialMaterialOrder)) {
            Flash::error('Material  Material Order not found');

            return redirect(route('materialMaterialOrders.index'));
        }

        $this->materialMaterialOrderRepository->delete($id);

        Flash::success('Material  Material Order deleted successfully.');

        return redirect(route('materialMaterialOrders.index'));
    }
}

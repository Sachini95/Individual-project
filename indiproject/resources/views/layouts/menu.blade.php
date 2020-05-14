<li class="{{ Request::is('materials*') ? 'active' : '' }}">
    <a href="{{ route('materials.index') }}"><i class="fa fa-edit"></i><span>Materials</span></a>
</li>

<li class="{{ Request::is('materialOrders*') ? 'active' : '' }}">
    <a href="{{ route('materialOrders.index') }}"><i class="fa fa-edit"></i><span>Material Orders</span></a>
</li>

<li class="{{ Request::is('materialMaterialOrders*') ? 'active' : '' }}">
    <a href="{{ route('materialMaterialOrders.index') }}"><i class="fa fa-edit"></i><span>Material  Material Orders</span></a>
</li>


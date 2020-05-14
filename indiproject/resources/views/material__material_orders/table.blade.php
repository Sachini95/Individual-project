<div class="table-responsive">
    <table class="table" id="materialMaterialOrders-table">
        <thead>
            <tr>
                <th>Order Id</th>
        <th>Material Id</th>
        <th>Supply Date</th>
        <th>Supply Notes</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materialMaterialOrders as $materialMaterialOrder)
            <tr>
                <td>{{ $materialMaterialOrder->order_id }}</td>
            <td>{{ $materialMaterialOrder->material_id }}</td>
            <td>{{ $materialMaterialOrder->supply_date }}</td>
            <td>{{ $materialMaterialOrder->supply_notes }}</td>
                <td>
                    {!! Form::open(['route' => ['materialMaterialOrders.destroy', $materialMaterialOrder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('materialMaterialOrders.show', [$materialMaterialOrder->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('materialMaterialOrders.edit', [$materialMaterialOrder->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

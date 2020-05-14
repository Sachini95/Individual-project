<div class="table-responsive">
    <table class="table" id="materialOrders-table">
        <thead>
            <tr>
                <th>Order Id</th>
        <th>Order Date</th>
        <th>Project Id</th>
        <th>Project</th>
        <th>Project Supervisor</th>
        <th>Items</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materialOrders as $materialOrder)
            <tr>
                <td>{{ $materialOrder->order_id }}</td>
            <td>{{ $materialOrder->order_date }}</td>
            <td>{{ $materialOrder->project_id }}</td>
            <td>{{ $materialOrder->project }}</td>
            <td>{{ $materialOrder->project_supervisor }}</td>
            <td>{{ $materialOrder->items }}</td>
                <td>
                    {!! Form::open(['route' => ['materialOrders.destroy', $materialOrder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('materialOrders.show', [$materialOrder->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('materialOrders.edit', [$materialOrder->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="materials-table">
        <thead>
            <tr>
                <th>Material Id</th>
        <th>Material Type</th>
        <th>Quantity</th>
        <th>Supplier</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{ $material->material_id }}</td>
            <td>{{ $material->material_type }}</td>
            <td>{{ $material->quantity }}</td>
            <td>{{ $material->supplier }}</td>
                <td>
                    {!! Form::open(['route' => ['materials.destroy', $material->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('materials.show', [$material->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('materials.edit', [$material->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

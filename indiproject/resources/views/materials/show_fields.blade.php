<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $material->id }}</p>
</div>

<!-- Material Id Field -->
<div class="form-group">
    {!! Form::label('material_id', 'Material Id:') !!}
    <p>{{ $material->material_id }}</p>
</div>

<!-- Material Type Field -->
<div class="form-group">
    {!! Form::label('material_type', 'Material Type:') !!}
    <p>{{ $material->material_type }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $material->quantity }}</p>
</div>

<!-- Supplier Field -->
<div class="form-group">
    {!! Form::label('supplier', 'Supplier:') !!}
    <p>{{ $material->supplier }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $material->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $material->updated_at }}</p>
</div>


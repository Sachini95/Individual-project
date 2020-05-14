<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $materialMaterialOrder->id }}</p>
</div>

<!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $materialMaterialOrder->order_id }}</p>
</div>

<!-- Material Id Field -->
<div class="form-group">
    {!! Form::label('material_id', 'Material Id:') !!}
    <p>{{ $materialMaterialOrder->material_id }}</p>
</div>

<!-- Supply Date Field -->
<div class="form-group">
    {!! Form::label('supply_date', 'Supply Date:') !!}
    <p>{{ $materialMaterialOrder->supply_date }}</p>
</div>

<!-- Supply Notes Field -->
<div class="form-group">
    {!! Form::label('supply_notes', 'Supply Notes:') !!}
    <p>{{ $materialMaterialOrder->supply_notes }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $materialMaterialOrder->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $materialMaterialOrder->updated_at }}</p>
</div>


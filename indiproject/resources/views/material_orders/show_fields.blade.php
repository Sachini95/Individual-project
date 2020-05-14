<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $materialOrder->id }}</p>
</div>

<!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $materialOrder->order_id }}</p>
</div>

<!-- Order Date Field -->
<div class="form-group">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{{ $materialOrder->order_date }}</p>
</div>

<!-- Project Id Field -->
<div class="form-group">
    {!! Form::label('project_id', 'Project Id:') !!}
    <p>{{ $materialOrder->project_id }}</p>
</div>

<!-- Project Field -->
<div class="form-group">
    {!! Form::label('project', 'Project:') !!}
    <p>{{ $materialOrder->project }}</p>
</div>

<!-- Project Supervisor Field -->
<div class="form-group">
    {!! Form::label('project_supervisor', 'Project Supervisor:') !!}
    <p>{{ $materialOrder->project_supervisor }}</p>
</div>

<!-- Items Field -->
<div class="form-group">
    {!! Form::label('items', 'Items:') !!}
    <p>{{ $materialOrder->items }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $materialOrder->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $materialOrder->updated_at }}</p>
</div>


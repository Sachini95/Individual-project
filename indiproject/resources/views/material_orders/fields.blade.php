<!-- Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Order Id:') !!}
    {!! Form::text('order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_date', 'Order Date:') !!}
    {!! Form::date('order_date', null, ['class' => 'form-control','id'=>'order_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#order_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project Id:') !!}
    {!! Form::text('project_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project', 'Project:') !!}
    {!! Form::text('project', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Supervisor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_supervisor', 'Project Supervisor:') !!}
    {!! Form::text('project_supervisor', null, ['class' => 'form-control']) !!}
</div>

<!-- Items Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('items', 'Items:') !!}
    {!! Form::textarea('items', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('materialOrders.index') }}" class="btn btn-default">Cancel</a>
</div>

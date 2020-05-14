<!-- Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Order Id:') !!}
    {!! Form::text('order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Material Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material_id', 'Material Id:') !!}
    {!! Form::text('material_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Supply Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supply_date', 'Supply Date:') !!}
    {!! Form::date('supply_date', null, ['class' => 'form-control','id'=>'supply_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#supply_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Supply Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('supply_notes', 'Supply Notes:') !!}
    {!! Form::textarea('supply_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('materialMaterialOrders.index') }}" class="btn btn-default">Cancel</a>
</div>

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Material  Material Order
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($materialMaterialOrder, ['route' => ['materialMaterialOrders.update', $materialMaterialOrder->id], 'method' => 'patch']) !!}

                        @include('material__material_orders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
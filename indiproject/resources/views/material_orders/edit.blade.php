@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Material Order
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($materialOrder, ['route' => ['materialOrders.update', $materialOrder->id], 'method' => 'patch']) !!}

                        @include('material_orders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
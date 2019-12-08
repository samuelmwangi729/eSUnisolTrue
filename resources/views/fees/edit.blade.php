@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fee
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fee, ['route' => ['fees.update', $fee->id], 'method' => 'patch']) !!}

                        @include('fees.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
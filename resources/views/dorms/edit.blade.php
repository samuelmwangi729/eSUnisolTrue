@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dorm
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dorm, ['route' => ['dorms.update', $dorm->id], 'method' => 'patch']) !!}

                        @include('dorms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
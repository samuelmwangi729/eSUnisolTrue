@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Designation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($designation, ['route' => ['designations.update', $designation->id], 'method' => 'patch']) !!}

                        @include('designations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
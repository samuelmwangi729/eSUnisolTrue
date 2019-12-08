@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Results
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($results, ['route' => ['results.update', $results->id], 'method' => 'patch']) !!}

                        @include('results.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
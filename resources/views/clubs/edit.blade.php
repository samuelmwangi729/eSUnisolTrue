@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Club
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($club, ['route' => ['clubs.update', $club->id], 'method' => 'patch']) !!}

                        @include('clubs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
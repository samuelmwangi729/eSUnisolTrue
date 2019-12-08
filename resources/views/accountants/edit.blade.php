@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Accountant
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($accountant, ['route' => ['accountants.update', $accountant->id], 'method' => 'patch']) !!}

                        @include('accountants.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
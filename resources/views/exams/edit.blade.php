@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Exam
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($exam, ['route' => ['exams.update', $exam->id], 'method' => 'patch']) !!}

                        @include('exams.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
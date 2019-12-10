@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Student
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div id="app">
            {{-- <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'students.store']) !!}

                        @include('students.fields')

                    {!! Form::close() !!}
                </div>
            </div> --}}
            <add-student></add-student>
        </div>
    </div>
@endsection

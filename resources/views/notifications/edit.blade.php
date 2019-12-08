@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Notification
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($notification, ['route' => ['notifications.update', $notification->id], 'method' => 'patch']) !!}

                        @include('notifications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
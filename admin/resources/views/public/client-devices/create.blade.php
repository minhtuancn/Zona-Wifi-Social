@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: edit user
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Device</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/client-devices', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.client-devices.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
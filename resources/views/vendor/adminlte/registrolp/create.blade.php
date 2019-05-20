@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Crear Nuevo Registro')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>

    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/registrolp') }}" title="Regresar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif



                    <form method="POST" action="{{ url('/registrolp') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

        


                       








                            @include ('vendor/adminlte.registrolp.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

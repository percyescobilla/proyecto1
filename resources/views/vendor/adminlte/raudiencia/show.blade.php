@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

<section class="content-header">
    <h1>
        Resultado de Audiencia {{ $raudiencium->id  }}
       
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active"> Resultado de Audiencia {{ $raudiencium->id  }}
       </li>
    </ol>
</section>
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                   
                    <div class="card-body">

                        <a href="{{ url('/raudiencia') }}" title="regresar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> regresar</button></a>
                        <a href="{{ url('/raudiencia/' . $raudiencium->id . '/edit') }}" title="Edit raudiencium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('raudiencia' . '/' . $raudiencium->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete raudiencium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $raudiencium->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $raudiencium->nombre }} </td></tr><tr><th> Descripcion </th><td> {{ $raudiencium->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

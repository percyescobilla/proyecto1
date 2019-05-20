@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

<section class="content-header">
    <h1>
        Sede {{ $sede->id }}
       
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">sede {{ $sede->id }}</li>
    </ol>
</section>
    <div class="container">
        <div class="row">
          
            <div class="col-md-9">
                <div class="card">
                 
                    <div class="card-body">

                        <a href="{{ url('/sede') }}" title="regresar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/sede/' . $sede->id . '/edit') }}" title="Editar Sede"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('sede' . '/' . $sede->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar sede" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                          <div class="box-body">
              <table id="sedes" class="table table-bordered table-striped">
               
                <tbody>
                    <tr>
                                        <th>ID</th><td>{{ $sede->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $sede->nombre }} </td></tr><tr><th> Direccion </th><td> {{ $sede->direccion }} </td></tr>


                </tbody>
            </table>
        </div>

                         
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

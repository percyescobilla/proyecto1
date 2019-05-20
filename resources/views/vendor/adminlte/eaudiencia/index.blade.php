@extends('adminlte::layouts.app') 

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')


<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Especialista de Audiencia')
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
                
                        <a href="{{ url('/eaudiencia/create') }}" class="btn btn-success btn-sm" title="Add New eaudiencium">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>

                        <form method="GET" action="{{ url('/eaudiencia') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">



                          <div class="input-group input-group-sm col-md-4" >

                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                
                                <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nombre</th><th>Numero</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($eaudiencia as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->numero }}</td>
                                        <td>
                                            <a href="{{ url('/eaudiencia/' . $item->id) }}" title="View eaudiencium"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/eaudiencia/' . $item->id . '/edit') }}" title="Edit eaudiencium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/eaudiencia' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete eaudiencium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $eaudiencia->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('adminlte::layouts.app') 

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')


<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Sede')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>

    <div class="container">
        <div class="row">
           <br>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> </div>
                     <div>
                     <a href="{{ url('/sede/create') }}" class="btn btn-success btn-sm" title="Agregar Sede">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Sede
                        </a>  
                        </div>


                        <form method="GET" action="{{ url('/sede') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">

                          <div class="input-group input-group-sm col-md-4" >

                         <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                    
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                        </span>

                        </div>
                        </form>




                    <div class="card-body">
                                           

                        <br/>
                        <br/>
                        
                        


                        <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DTsede" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th><th>Nombre</th><th>Direccion</th><th>Actions</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($sede as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->direccion }}</td>
                                        <td>
                                            <a href="{{ url('/sede/' . $item->id) }}" title="View sede"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/sede/' . $item->id . '/edit') }}" title="Edit sede"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/sede' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete sede" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
               
               
                </tbody>
           
              </table>
               <div class="pagination-wrapper"> {!! $sede->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
            <!-- /.box-body -->
          </div>


                    </div>
                </div>
            </div>
        </div>
    










@endsection


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<!--<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->

<script type="text/javascript">

 
    $('#DTSede').DataTable();

</script>
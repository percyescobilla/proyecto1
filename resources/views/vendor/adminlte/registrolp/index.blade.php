@extends('adminlte::layouts.app') 

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')


<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Registro')
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


            </div>





            <div class="col-md-12">
                <div class="card">
                  
                        <a href="{{ url('/registrolp/create') }}" class="btn btn-success btn-sm" title="Add New registrolp">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nuevo
                        </a>

                        <form method="GET" action="{{ url('/registrolp') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">

                             <div class="input-group input-group-sm col-md-4" >

                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                
                                <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                        </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                      

                        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Mesa de Partes</a></li>
              <li><a href="#tab_2" data-toggle="tab">Pool de Causas</a></li>
              <li><a href="#tab_3" data-toggle="tab">Poll de Asistentes</a></li>
               <li><a href="#tab_4" data-toggle="tab">Pool de Audiencias</a></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box">
             <div class="box-body">
                             <table class="table table-bordered table-striped">
                               <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>F. ingreso</th>
                                        <th>Ojurisdic</th>
                                        <th>Sede</th>
                                        <th>Nroexpe</th>
                                        <th>Tipo de Denuncia</th>
                                        <th>Objeto Jurisdiccional</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registrolp as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fechain }}</td>
                                        <td>{{ $item->ojurisdic }}</td>
                                        <td>{{ $item->sede_nombre}}</td>
                                        <td>{{ $item->nroexpe }}</td>
                                        <td>{{ $item->texpe }}</td>
                                        <td>{{ $item->ojudicial }}</td>
                                        <td>
                                            <a href="{{ url('/registrolp/' . $item->id) }}" title="View registrolp"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/registrolp/' . $item->id . '/edit') }}" title="Edit registrolp"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                            <form method="POST" action="{{ url('/registrolp' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete registrolp" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registrolp->appends(['search' => Request::get('search')])->render() !!} </div>
                      </div>
                        </div>
              

                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               <div class="box">
             <div class="box-body">
                             <table class="table table-bordered table-striped">
                               <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>E.Judicial de Causas</th>
                                        <th>F. de Recepcion de Escritos Requerimientos</th>
                                        <th>F.tramite escritos Requerimientos</th>
                                        <th>Tiempo tramite</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                @foreach($registrolp as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ejcausa }}</td>
                                        <td>{{ $item->fechareq }}</td>
                                        <td>{{ $item->fechateq }}</td>
                                        <td>   <?php  

                                    $date1 = new DateTime($item->fechareq);
                                    $date2 = new DateTime($item->fechateq);
                                    $diff = $date1->diff($date2);
                                    // will output 2 days
                                    echo $diff->days ;?>




                                        </td>
                                        <td>
                                            <a href="{{ url('/registrolp/' . $item->id) }}" title="View registrolp"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/registrolp/' . $item->id . '/edit') }}" title="Edit registrolp"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                            <form method="POST" action="{{ url('/registrolp' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete registrolp" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registrolp->appends(['search' => Request::get('search')])->render() !!} </div>
                      </div>
                        </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
               <div class="box">
             <div class="box-body">
                             <table class="table table-bordered table-striped">
                               <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Asistente Judicial</th>
                                        <th>F. Gener. Cedulas</th>
                                        <th>Tiempo tramite</th>
                                        <th>F. Cedulas Diligencia.</th>
                                        <th>Tiempo tramie</th>
                                    
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registrolp as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ajudicial }}</td>
                                        <td>{{ $item->fechagc }}</td>
                                        <td>
                                         <?php  

                                    $date1 = new DateTime($item->fechateq);
                                    $date2 = new DateTime($item->fechagc);
                                    $diff = $date1->diff($date2);
                                    // will output 2 days
                                    echo $diff->days ;?>
                                        
                                    </td>
                                        <td>{{ $item->fechacd }}</td>
                                        <td>
                                             <?php  

                                    $date1 = new DateTime($item->fechagc);
                                    $date2 = new DateTime($item->fechacd);
                                    $diff = $date1->diff($date2);
                                    // will output 2 days
                                    echo $diff->days ;?>

                                        </td>
                                        <td>
                                            <a href="{{ url('/registrolp/' . $item->id) }}" title="View registrolp"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/registrolp/' . $item->id . '/edit') }}" title="Edit registrolp"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                            <form method="POST" action="{{ url('/registrolp' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete registrolp" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registrolp->appends(['search' => Request::get('search')])->render() !!} </div>
                      </div>
                        </div>
              </div>
              <div class="tab-pane" id="tab_4">
               <div class="box">
             <div class="box-body">
                             <table class="table table-bordered table-striped">
                               <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>F. Recep. Audiencia</th>
                                        <th>F. Audiencia</th>
                                        <th>E. Judicial Audiencia</th>
                                        <th>T. audiencia</th>
                                        <th>Resultado</th>
                                        <th>Reprogramación</th>
                                        <th>Devolucion</th>
                                         <th>F. D. P</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registrolp as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                       <td>{{ $item->fechareaudiencia }}</td>
                                        <td>{{ $item->fechaaudi }}</td>
                                        <td>{{ $item->ejaudiencia }}</td>
                                        <td>{{ $item->taudiencia }}</td>
                                        <td>{{ $item->raudiencia }}</td>
                                        <td>{{ $item->reproaudien }}</td>
                                         <td>{{ $item->fechadevol }}</td>
                                             <td>

                                                    <?php  

                                    $date1 = new DateTime($item->fechain);
                                    $date2 = new DateTime($item->fechaaudi);
                                    $diff = $date1->diff($date2);
                                    // will output 2 days
                                    echo $diff->days ;?>


                                             </td>
                                        
                                        <td>
                                            <a href="{{ url('/registrolp/' . $item->id) }}" title="View registrolp"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/registrolp/' . $item->id . '/edit') }}" title="Edit registrolp"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                            <form method="POST" action="{{ url('/registrolp' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete registrolp" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registrolp->appends(['search' => Request::get('search')])->render() !!} </div>
                      </div>
                       
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          </div>

      

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : 700,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Chrome'
      },
      {
        value    : 500,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'IE'
      },
      {
        value    : 400,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'FireFox'
      },
      {
        value    : 600,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Safari'
      },
      {
        value    : 300,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Opera'
      },
      {
        value    : 100,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Navigator'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>
@endsection

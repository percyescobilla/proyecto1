<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Bienvenido</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-university'></i> <span>Linea de Proceso NCP</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/registrolp">Registro</a></li>
                   
                    <li class="treeview">
                <a href="#"><i class='fa fa-binoculars'></i> <span>Mantenimiento</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/sede">Sede</a></li>
                    <li><a href="/ojurisdiccional">Organismo Jurisdiccional</a></li>
                    <li><a href="/ojudicial">Organo judicial</a></li>
                    <li><a href="taudiencia">Tipo Audiencia</a></li>
                    <li><a href="texpediente">Tipo Expediente</a></li>
                    <li><a href="asistentejudicial">Asisten Judicial</a></li>
                    <li><a href="ecausa">E.J. Causas</a></li>
                    <li><a href="eaudiencia">E.J. Audiencias</a></li>
                    <li><a href="raudiencia">Resultados Audiencia</a></li>
                </ul>
            </li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-binoculars'></i> <span>Seguimiento Audiencia</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                     <li><a href="/registro">Registro</a></li>
                   
                    <li class="treeview">
                <a href="#"><i class='fa fa-binoculars'></i> <span>Mantenimiento</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home') }}">Sede</a></li>
                    <li><a href="#">Organismo Jurisdiccional</a></li>
                    <li><a href="#">Organo judicial</a></li>
                
                </ul>
            </li>
                </ul>
            </li>



         
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

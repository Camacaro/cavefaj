<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S.A.R.E.</title>
  <link rel="icon" href="../../../public/dist/img/cavefaj.png"> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
  <!-- Font Awesome -->
  {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}
  <!-- Ionicons -->
  {!!Html::style('bower_components/Ionicons/css/ionicons.min.css')!!}
  <!-- Theme style -->
  {!!Html::style('dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!!Html::style('dist/css/skins/_all-skins.min.css')!!}

  <!-- CSS - Necesarios en las secciones -->
    @stack("css")

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>SARE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">S.A.R.E.</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('dist/img/icon.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs"> {{ Auth::user()->name }} </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('dist/img/icon.png')}}" class="img-circle" alt="User Image">

<!--                 <p>
                  {{ Auth::user()->name }}
                  <small> Miembro desde {{ Auth::user()->created_at }}</small>
                </p>
 -->              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> {{ __('Salir') }} 
                            </a>

                            <form   id="logout-form" 
                                    action="{{ route('logout') }}" 
                                    method="POST" 
                                    style="display: none;">
                                @csrf
                            </form>
                  
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/icon.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }} </p>
<!--           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
 -->        </div>
      </div>
      
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENÚ DE NAVEGACIÓN</li>   

            @permission('user')
            <li class="{{ Request::is('admin/feria/*') || Request::is('admin/feria') ? 'active' : '' }}">
                <a href="{{ url('admin/feria')}}">
                    <i class="fa fa-money"></i> <span>Feria</span>
                </a>
            </li>
            @endpermission

            @permission('admin')
            <li class="{{ Request::is('admin/reporte/*') || Request::is('admin/reporte') ? 'active' : '' }}">
                <a href="{{ url('admin/reporte')}}">
                    <i class="fa fa-file"></i> <span>Reportes</span>
                </a>
            </li>

            <!--<li class="{{ Request::is('admin/edicion-feria') ? 'active' : '' }}">
                <a href="{{ url('admin/edicion-feria')}}">
                   <i class="fa fa-cog"></i> <span>Edicion de Feria</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/usuarios') ? 'active' : '' }}">
                <a href="{{ url('admin/usuarios')}}">
                    <i class="fa fa-user"></i> <span>Usuarios</span>
                </a>
            </li>-->



            <li class="{{ Request::is('admin/usuarios/*') || Request::is('admin/usuarios') || Request::is('admin/edicion-feria') ? 'active' : '' }} treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Configuración</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/usuarios') ? 'active' : '' }}">
                        <a href="{{ url('admin/usuarios')}}">
                            <i class="fa fa-circle-o"></i> Usuarios
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/edicion-feria') ? 'active' : '' }}">
                        <a href="{{ url('admin/edicion-feria')}}">
                            <i class="fa fa-circle-o"></i> Edicion de Feria
                        </a>
                    </li>
                </ul>
            </li>
            @endpermission
        

        <!--<li>
          <a href="../widgets.html">
            <i class="fa fa-users"></i> <span>Usuarios</span>
            
          </a>
        </li>-->

        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/reporte')}}"><i class="fa fa-circle-o"></i> Reporte Diario</a></li>
            <li><a href="{{ url('admin/reporte')}}"><i class="fa fa-circle-o"></i> Reporte Ciudadanos</a></li>
          </ul>
        </li>-->
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">CAVEFAJ</a></strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
<!-- Bootstrap 3.3.7 -->
{!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
<!-- SlimScroll -->
{!!Html::script('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')!!}
<!-- FastClick -->
{!!Html::script('bower_components/fastclick/lib/fastclick.js')!!}
<!-- AdminLTE App -->
{!!Html::script('dist/js/adminlte.min.js')!!}
<!-- AdminLTE for demo purposes -->
{!!Html::script('dist/js/demo.js')!!}

<!-- JavaScript necesarios en las sectiones-->
    @stack("js")

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>


{!!Html::style('')!!}
{!!Html::script('')!!}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GAD Pasaje | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{url('administration/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('administration/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('administration/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/iCheck/all.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/datepicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/timepicker/bootstrap-timepicker.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <link rel="stylesheet" href="{{url('administration/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{url('administration/plugins/datatables/dataTables.bootstrap.css')}}">

    <link rel="stylesheet" href="{{url('administration/dist/css/mensajes.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{url('administration/dist/css/alertify.css')}}">
    <link rel="shortcut icon" href="{{url('frontend/images/ico/ico.ico')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background: #ecf0f5 !important;">
<div class="wrapper" id="contenido_principal">

    <header class="main-header">
   
        <!-- Logo -->
        <a href="{{url('administracion')}}" class="logo">
            <span class="logo-mini"><b>AD</b></span>
            <span class="logo-lg"><b>ADMINISTRACIÓN</b></span>
        </a>
        
        <nav class="navbar navbar-static-top" role="navigation">
        
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navegación</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
           
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{$total}}</span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="header">Tienes {{$total}} comentarios sin aprobar</li>
              <li>
           
                <ul class="menu">
                  @if($comentariosAtractivosT >0)

                   <li>
                    <a href="{{route('comentariosTuristicos.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosAtractivosT}} comentarios de Atractivos T.
                    </a>
                  </li>


                  @endif

                  @if($comentariosNoticias >0)

                   <li>
                    <a href="{{route('comentariosNoticias.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosNoticias}} comentarios de Noticias
                    </a>
                  </li>


                  @endif


                  @if($comentariosHospedaje >0)

                   <li>
                    <a href="{{route('comentariosHospedaje.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosHospedaje}} comentarios de Hospedaje
                    </a>
                  </li>


                  @endif


                  @if($comentariosDiversion >0)

                   <li>
                    <a href="{{route('comentariosDiversion.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosDiversion}} comentarios de Diversion
                    </a>
                  </li>


                  @endif

                  @if($comentariosEventos >0)

                   <li>
                    <a href="{{route('comentariosEventos.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosEventos}} comentarios de Eventos
                    </a>
                  </li>


                  @endif


                  @if($comentariosAlimentacion >0)

                   <li>
                    <a href="{{route('comentariosAlimentacion.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosAlimentacion}} comentarios de Alimentacion
                    </a>
                  </li>


                  @endif


                  @if($comentariosActividades >0)

                   <li>
                    <a href="{{route('comentariosActividades.noAprovados')}}">
                      <i class="fa fa-users text-red"></i> Hay {{$comentariosActividades}} comentarios de Actividades
                    </a>
                  </li>


                  @endif
                
                 
                 
                </ul>
              </li>
              
            </ul>
          </li>
  
        


                     
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <small class="bg-red">Online</small>
                            @if(Auth::user()->path!=null)
                                    <td>
                                        <img src="{{url('fotos/'.Auth::user()->path)}}" class="user-image" alt="User Image"/>
                                    </td>
                                @else
                                    <td>
                                        <img src="{{url('fotos/no-avatar.png')}}" class="user-image" alt="User Image"/>
                                    </td>
                                @endif

                            
                            <span class="hidden-xs">{!! Auth::user()->name.' '.Auth::user()->apellido !!}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                  @if(Auth::user()->path!=null)
                                    <td>
                                        <img src="{{url('fotos/'.Auth::user()->path)}}" class="img-circle" alt="User Image"/>
                                    </td>
                                @else
                                    <td>
                                        <img src="{{url('fotos/no-avatar.png')}}" class="img-circle" alt="User Image"/>
                                    </td>
                                @endif

                                <p>
                                   {!! Auth::user()->name.' '.Auth::user()->apellido !!}
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" 
                                                     class="btn btn-default btn-flat">
                                            Salir
                                        </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </nav>

        
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                @if(Auth::user()->path!=null)
                    <td>
                        <img src="{{url('fotos/'.Auth::user()->path)}}" class="img-circle" alt="User Image"/>
                    </td>
                @else
                     <td>
                        <img src="{{url('fotos/no-avatar.png')}}" class="img-circle" alt="User Image"/>
                    </td>
                @endif
                
                </div>
                <div class="pull-left info">
                <p>{!! Auth::user()->name.' '.Auth::user()->apellido !!}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{url('administracion')}}">
                        <i class="fa fa-laptop"></i>
                        <span>Inicio</span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-user-circle-o"></i>
                        <span>USUARIOS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('usuarios.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                        @if(Auth::user()->id_roles == 2)
                        <li class="disabled"><a href="{{route('usuarios.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                         @else
                          <li><a href="{{route('usuarios.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                        @endif
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i><span>NOTICIAS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias Noticias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categorias.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categorias.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Noticias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('noticias.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                          <li><a href="{{route('noticias.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                           <ul class="treeview-menu">

                                <li><a href="{{route('comentariosNoticias.index')}}"><i class="fa fa-list-ul"></i>Aprovados</a></li>
                                <li><a href="{{route('comentariosNoticias.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasNoticias.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasNoticias.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>

                         
                        

        

                        
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i><span>PROYECTOS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                      

                         <li><a href="{{route('proyectos.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                          <li><a href="{{route('proyectos.create')}}"><i class="fa fa-file"></i> Agregar</a></li>

                       

                         
                        

        

                        
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i><span>ACTIVIDADES</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias Actividades
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasActividades.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasActividades.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-pencil-square-o"></i> Actividades
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('actividades.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('actividades.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('comentariosActividades.index')}}"><i class="fa fa-list-ul"></i>Aprovados</a></li>
                                <li><a href="{{route('comentariosActividades.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasActividades.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasActividades.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>



                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i><span>EVENTOS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias Eventos
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasEventos.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasEventos.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> Guia Eventos
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('guiaEventos.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-pencil-square-o"></i> Eventos
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('eventos.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('eventos.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>


                         <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('comentariosEventos.index')}}"><i class="fa fa-list-ul"></i>Aprobados</a></li>
                                  <li><a href="{{route('comentariosEventos.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasEventos.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasEventos.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i><span>CATASTROS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> SUBIR PDF
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('catastros.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                 <li><a href="{{route('catastros.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                              
                             
                            </ul>
                        </li>
                        
                    </ul>
                </li>


                  <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i><span>ZONAS / PARROQUIAS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Zonas
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('zonas.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('zonas.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-pencil-square-o"></i> Parroquias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('parroquias.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('parroquias.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>



                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-suitcase"></i><span>ATRACTIVOS TURISTICOS</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasTuristicas.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasTuristicas.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-suitcase"></i> Atractivos turisticos
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('turistico.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('turistico.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('comentariosTuristicos.index')}}"><i class="fa fa-list-ul"></i>Aprobados</a></li>
                                  <li><a href="{{route('comentariosTuristicos.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasTuristico.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasTuristico.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>



                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bed"></i><span>HOSPEDAJE</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasHospedaje.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasHospedaje.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-bed"></i> Hospedaje
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('hospedaje.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('hospedaje.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('comentariosHospedaje.index')}}"><i class="fa fa-list-ul"></i>Aprobados</a></li>
                                   <li><a href="{{route('comentariosHospedaje.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                       
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasHospedajes.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasHospedajes.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cutlery"></i><span>ALIMENTACIÓN</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasAlimentacion.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasAlimentacion.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-cutlery"></i> Alimentación
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('alimentacion.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('alimentacion.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('comentariosAlimentacion.index')}}"><i class="fa fa-list-ul"></i>Aprobados</a></li>
                                 <li><a href="{{route('comentariosAlimentacion.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasAlimentacion.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasAlimentacion.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>


                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cutlery"></i><span>GUIA TURISTICA</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Fotos Guia
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('guiaFotos.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('guiaFotos.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> GUIA TURISTICA FRONTEND
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('guia.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>

                         
                        

        

                        
                    </ul>
                </li>



                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-sign-language"></i><span>DIVERSIÓN</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasDiversion.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasDiversion.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-sign-language"></i> Diversión
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('diversion.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="{{route('diversion.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Comentarios
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('comentariosDiversion.index')}}"><i class="fa fa-list-ul"></i>Aprobados</a></li>
                                 <li><a href="{{route('comentariosDiversion.noAprovados')}}"><i class="fa fa-list-ul"></i>No Aprobados</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-newspaper-o"></i> Galeria Imágenes
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="{{route('galeriasDiversion.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('galeriasDiversion.create')}}"><i class="fa fa-list-ul"></i>Agregar</a></li>
                       
                       
                                
                             
                            </ul>
                        </li>
                        

        

                        
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-sign-language"></i><span>GASTRONOMÍA</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-folder-open"></i> Categorias
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                               <li><a href="{{route('categoriasGastronomia.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                <li><a href="{{route('categoriasGastronomia.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-sign-language"></i> Gastronomía
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                             <li><a href="#"><i class="fa fa-file"></i> Agregar</a></li>
                                
                             
                            </ul>
                        </li>

                       
                        

        

                        
                    </ul>
                </li>




                        


                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-server"></i><span>ACTUALIZACIONES</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-facebook"></i> Redes Sociales
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('redes.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-video-camera"></i> Video
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('videos.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                                
                             
                            </ul>
                        </li>
                        

                        <li>
                            <a href="#"><i class="fa fa-bookmark"></i> Footer
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('footer.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                                
                             
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> TODOS
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('todos.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>
                      

                        
                    </ul>
                </li>

                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-address-card-o"></i><span>PASAJE</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#"><i class="fa fa-map-marker"></i> ¿Cómo Llegar?
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                  <li><a href="{{route('llegar.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('llegar.create')}}"><i class="fa fa-file"></i>Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-map-o"></i> Mapas
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="{{route('mapas.index')}}"><i class="fa fa-list-ul"></i>Listado</a></li>
                       
                                    <li><a href="{{route('mapas.create')}}"><i class="fa fa-file"></i> Agregar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-question-circle"></i> Preguntas
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('preguntas.index')}}"><i class="fa fa-list-ul"></i>Listar</a></li>
                                <li><a href="{{route('preguntas.create')}}"><i class="fa fa-file"></i>Agregar</a></li>
                             
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> ¿Que traer?
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('traer.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-shopping-bag"></i> LOAF
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('loaf.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>

                         

                        <li>
                            <a href="#"><i class="fa fa-book"></i> Material Turistico
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('material.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>


                           <li>
                            <a href="#"><i class="fa fa-plane"></i> Turismo Comunitario
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{route('turismo.index')}}"><i class="fa fa-server"></i>Actualizar</a></li>
                             
                            </ul>
                        </li>

                        
                    </ul>
                </li>

                
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: #ecf0f5 !important;">
    @yield('title')
    <!-- Main content -->
        <section class="content" style="background: #ecf0f5 !important;">
            @yield('contenido')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script src="{{url('administration/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{url('administration/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('administration/plugins/moment.min.js')}}"></script>
    <script src="{{url('administration/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{url('administration/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('administration/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
    <script src="{{url('administration/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('administration/plugins/chartjs/Chart.min.js')}}"></script>
    <script src="{{url('administration/dist/js/app.min.js')}}"></script>
    <script src="{{url('administration/dist/js/sweetalert.min.js')}}"></script>
    <script src="{{url('administration/dist/js/jquery.inputmask.js')}}"></script>
    <script src="{{url('administration/dist/js/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{url('administration/dist/js/jquery.inputmask.extensions.js')}}"></script>

    <script src="{{url('administration/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('administration/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
     <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false
            });
        });
        </script>
 




    @yield('script')
    </div>
</body>
</html>
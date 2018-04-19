<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Victoria Court</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- DataTables -->
<link href="{!! asset('assets/plugins/datatables/jquery.dataTables.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/buttons.bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/responsive.bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/scroller.bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/dataTables.colVis.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/dataTables.bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
<link href="{!! asset('assets/plugins/datatables/fixedColumns.dataTables.min.css')!!}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.css">

<link href="{!! asset('asset/css/bootstrap.min.css')!!}" rel="stylesheet">
<link href="{!! asset('asset/css/datepicker3.css')!!}" rel="stylesheet">
<link href="{!! asset('asset/css/styles.css')!!}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<link rel="stylesheet" href="{!! asset('asset/sweetalert-master/dist/sweetalert.css') !!}">
<link href="{!! asset('asset/datepicker/css/bootstrap-datetimepicker.min.css')!!}" rel="stylesheet" media="screen">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .glyphicon-bell {
  font-size:1.5rem;
}

.notifications {
  min-width:420px; 
}
  
.notifications-wrapper {
  overflow:auto;
  max-height:250px;
}
    
.menu-title {
  color:#ff7788;
  font-size:1.5rem;
  display:inline-block;
}
 
.notification-heading, .notification-footer  {
    padding:2px 10px;
}

.dropdown-menu.divider {
  margin:5px 0;          
}

.item-title {
  font-size:1.3rem;
  color:#000;
}

.notifications a.content {
  text-decoration:none;
  background:#ccc;

}

.notification-item {
  padding:10px;
  margin:5px;
  background:#ccc;
  border-radius:4px;
}

.icon_counter_red_admin {
  background-color      : #f00;
}

.icon_counter_red_s_u {
  background-color      : #f00;
}

.icon_counter {
  color                 : #fff;
  font-family           : "Arial";
  font-size             : 14px;
  font-weight           : 600;
    
  position              : absolute;

  padding               : 0px 2px;
  margin-top            : 6px;
  margin-left           : -3px;

  -webkit-border-radius : 3px;
  -moz-border-radius    : 3px;
  border-radius         : 3px;

  -webkit-box-shadow    : inset 0px 0px 2px 0px rgba(50, 50, 50, 0.75);
  -moz-box-shadow       : inset 0px 0px 2px 0px rgba(50, 50, 50, 0.75);
  box-shadow            : inset 0px 0px 2px 0px rgba(50, 50, 50, 0.75);
}

    </style>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Victoria</span>Court</a>
            <ul class="user-menu">
            <!--    <li class="dropdown pull-right">
          @if(Auth::user()->user_type == "Super Admin" || Auth::user()->user_type == "Admin")  
          <a href="#" onClick="MyWindow=window.open('{{URL::Route('help')}}','MyWindow',width=600,height=300); return false;"><i class="glyphicon glyphicon-info-sign"></i>Help</a>
          @elseif( Auth::user()->user_type == "Standard User")
          <a href="#" onClick="MyWindow=window.open('{{URL::Route('helpUser')}}','MyWindow',width=600,height=300); return false;"><i class="glyphicon glyphicon-info-sign"></i>Help</a>
          @endif

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span id="usernameHeader">Welcome, {{{ Auth::user()->username }}}!</span><span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
          @if(Auth::user()->user_type == "Admin")  
                        <li><a href="{{URL::Route('settings')}}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>

            <li><a href="{{URL::Route('adminProfile')}}"><span class="glyphicon glyphicon-user"></span>&nbsp&nbsp&nbsp Profile</a></li>

                        <li><a href="{{URL::Route('loggedOut')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
          @elseif(Auth::user()->user_type == "Standard User")
          <li><a href="{{URL::Route('sUserSetting')}}"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
            <li><a href="{{URL::Route('loggedOut')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
          @endif  
                    </ul>
                </li> -->
            </ul>
        </div>          
    </div><!-- /.container-fluid -->
</nav>
<body id="app-layout">
   
    <br>
    <br>
    <br>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<script src="{!! asset('asset/js/notification.js')!!}"></script>
<script src="{!! asset('asset/js/lumino.glyphs.js')!!}"></script>
<script src="{!! asset('asset/sweetalert-master/dist/sweetalert.min.js') !!}"></script>

<script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>    
<!-- datatables -->
<script src="{!! asset('assets/plugins/datatables/jquery.dataTables.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.bootstrap.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.buttons.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/buttons.bootstrap.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/jszip.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/pdfmake.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/vfs_fonts.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/buttons.html5.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/buttons.print.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.fixedHeader.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.keyTable.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.responsive.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/responsive.bootstrap.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.scroller.min.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.colVis.js')!!}"></script>
<script src="{!! asset('assets/plugins/datatables/dataTables.fixedColumns.min.js')!!}"></script>
<script src="{!! asset('assets/pages/datatables.init.js')!!}"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
<script src="https://bartaz.github.io/sandbox.js/jquery.highlight.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IFMG - Gerenciador de Reuniões | Visualizar Reuniões</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo" style="background: #008B00;">
        <span><img src="images/if.png" style = "margin-left: -5px;" height="40px" width="30px" alt="Mini Image"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background: #006400;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <SPAN style="margin-left: 15px;font-size: 15px;">Gerenciador de Reuniões | Visualizar Reuniões</SPAN>
      </a>

      <div class="navbar-custom-menu" style="background: #006400;">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notificações</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <!--Itens do menu de notificação -->
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Você possui 5 novas reuniões
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Servidor</span>
            </a>
            <ul class="dropdown-menu" >
              <!-- User image -->
              <li class="user-header" style="background: #008B00;">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Servidor IFMG
                  <small>servidor@ifmg.edu.br</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                <div class="col-xs-4 text-center"></div>
                  <div class="col-xs-4 text-center">
                    <a href="#"> <i class="fa fa-edit"></i>        Editar informações</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat" style="border-radius: 5px;width: 8em;background: #FF0000;color: white;"><i class="fa fa-sign-out"></i>        Sair</a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Servidor</p>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

      <!-- Grupo de Menu - Cadastros -->
        <li class="header">Cadastros</li>

        <!-- Item de Menu - Pessoas -->
        <li class="treeview">
          <a href="#">
          <i class="fa fa-user"></i>
            <span>Pessoas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="alunos.php"><i class="fa fa-user"></i> Alunos</a></li>
            <li><a href="servidores.php"><i class="fa fa-user"></i> Servidores</a></li>            
          </ul>
        </li>
        <!-- Item de Menu - Outros -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i>
            <span>Outros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="grupos.php"><i class="fa fa-plus"></i> Grupos</a></li>
            <li><a href="reunioes.php"><i class="fa fa-plus"></i> Reuniões</a></li>
          </ul>
        </li>

        <!-- Grupo de Menu - Visualizar -->
        <li class="header">Visualizar</li>
        <li><a href="visualizarAtas.php"><i class="fa fa-search"></i> Atas</a></li>
        <li><a href="visualizarReunioes.php"><i class="fa fa-plus"></i> Reuniões</a></li>

        <!-- Grupo de Menu - Atas -->
        <li class="header">Atas</li>
        <li><a href="redigirAta.php"><i class="fa fa-pencil"></i> Redigir Ata</a></li>
        <li><a href="revisarAta.php"><i class="fa fa-edit"></i> Revisar Ata</a></li>
        <li><a href="mudarStatusAta.php"><i class="fa fa-check-square-o"></i> Mudar Status da Ata</a></li>

        <!-- Grupo de Menu - Mais -->
        <li class="header">Mais</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Informações</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="administradores.php"><i class="fa fa-user"></i> Administradores do Site</a></li>
            <li><a href="desenvolvedores.php"><i class="fa fa-users"></i> Desenvolvedores</a></li>
            <li><a href="http://www.formiga.ifmg.edu.br/" target="_blank"><i class="fa fa-bank"></i> IFMG</a></li>
            <li><a href="sobre.php"><i class="fa fa-info"></i> Sobre</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<center><h1>Reuniões agendadas</h1></center>
				<table border="1" class="table table-striped">
									<br>

									<thead>
										<tr>
										<th style="width: 20%"><center>Data</center></th>
										<th style="width: 20%"><center>Horário de Início</center></th>
										<th style="width: 30%;"><center>Local</center></th>
										<th style="width: 20%;"><center>Ponto de Pauta</center></th>
										<th style="width: 5%;"><center>Editar</center></th>
										<th style="width: 10%;"><center>Excluir</center></th>
										</tr>
									</thead>


									<tbody>

										<tr>
											<td><center></center></td>
											<td><center></center></td>
											<td><center></center></td>
											<td style="width: 10%;"><center><a class="btn btn-primary btn-block" style="padding:4px 1px;background: #666666;"><i class="fa fa-search"></i>&nbsp; Visualizar</a></center></td>
											<td><a class="btn btn-primary btn-block" style="padding:4px 1px;"><i class="fa fa-edit"></i></a></td>
											<td><a class="btn btn-danger btn-block" style="padding:4px 1px;"><i class="fa fa-remove"></i></a></td>
										</tr>

									</tbody>
								</table>
			</section>
			<section class="content">
			</section>
		</div>


		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script>
			$.widget.bridge('uibutton', $.ui.button);
		</script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Sparkline -->
		<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="plugins/knob/jquery.knob.js"></script>
		<!-- daterangepicker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
		<script src="plugins/daterangepicker/daterangepicker.js"></script>
		<!-- datepicker -->
		<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- Slimscroll -->
		<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="plugins/fastclick/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="dist/js/pages/dashboard.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>

	</body>
	</html>

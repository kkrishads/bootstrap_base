<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
	
	
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Jeevan Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
           
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				<?php
				if($screenname=="dashboard") {
					echo '<li class="active">';
				} else {
					echo '<li>';
				}
				?>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<?php
				if($screenname=="register") {
					echo '<li class="active">';
				} else {
					echo '<li>';
				}
				?>
              
                        <a href="register.php"><i class="fa fa-fw fa-edit"></i> Registration</a>
                    </li>
					<?php
				if($screenname=="expired_registers") {
					echo '<li class="active">';
				} else {
					echo '<li>';
				}
				?>
              
                        <a href="expired_list.php"><i class="fa fa-fw fa-edit"></i> Expired Registrations</a>
                    </li>
					
					<?php
				if($screenname=="visit_history") {
					echo '<li class="active">';
				} else {
					echo '<li>';
				}
				?>
              
                        <a href="vistors_view.php?type=C"><i class="fa fa-fw fa-edit"></i>Visit History</a>
                    </li>
					<?php
				if($screenname=="customer_history") {
					echo '<li class="active">';
				} else {
					echo '<li>';
				}
				?>
              
                        <a href="customer_history.php"><i class="fa fa-fw fa-edit"></i> Customer History</a>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
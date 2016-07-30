<!DOCTYPE html>
<?php
include 'config.php';
$type="Customer";
$request="C";
$screenname="customer_history";
include 'header.php';
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Customer History 
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-edit"></i>  Customer History
                            </li>
                        </ol>
                    </div>
                </div>
				
				
                <!-- /.row -->

        
                <!-- /.row -->
				<?php
				$a_query=mysql_query("Select count(Id) as counts from cadidate_list where DISPSTATUS!=0");
				$a_data=mysql_fetch_array($a_query);
				
				$d_query=mysql_query("Select count(Id) as counts from cadidate_list where DISPSTATUS=0");
				$d_data=mysql_fetch_array($d_query);
				?>

                <div class="row">
				
				<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-flag fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $a_data[0];?></div>
                                        <div>Active Customers</div>
                                    </div>
                                </div>
                            </div>
                            <a href="customer_history.php?type=A">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
				
				 	<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-flag fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $d_data[0];?></div>
                                        <div>In-Active Customers</div>
                                    </div>
                                </div>
                            </div>
                            <a href="customer_history.php?type=I">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                  <div class="col-lg-12">
				  
				  
                        <div class="panel panel-primary">
                                 <div class="panel-heading">
							
                                <h3 class="panel-title"><?php echo $type;?> List</h3>
                            </div>
                            <div class="panel-body">
							
		<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
				

<th>Customer Id</th>
<th>Date</th>
<th>Counts</th>
<th>IP Address</th>

				</tr>
			</thead>
		</table>
							
							
                               
                            </div>
                        </div>
                    </div>
					
					
					
					
				
                    </div>
                </div>
                <!-- /.row -->

        
        
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {

				// ATW
				if ( top.location.href != location.href ) top.location.href = location.href;

				// Initialize datatable
				$('#example').dataTable({
					"aProcessing": true,
					"aServerSide": true,
					"ajax": "visitor_count.php?ajax=<?php echo $request; ?>"
				});

				// Save edited row
				$("#edit-form").on("submit", function(event) {
					event.preventDefault();
					$.post("datatable.php?edit=" + $('#edit-id').val(), $(this).serialize(), function(data) {
						var obj = $.parseJSON(data);
						var tr = $('a[data-id="row-' + $('#edit-id').val() + '"]').parent().parent();
						$('td:eq(1)', tr).html(obj.name);
						$('td:eq(2)', tr).html(obj.email);
						$('td:eq(3)', tr).html(obj.mobile);
						$('#edit-modal').modal('hide');
					}).fail(function() { alert('Unable to save data, please try again later.'); });
				});

				// Add new row
				$("#add-form").on("submit", function(event) {
					event.preventDefault();
					$.post("datatable.php?add", $(this).serialize(), function(data) {
						var obj = $.parseJSON(data);
						$('#example tbody tr:last').after('<tr role="row"><td class="sorting_1">' + obj.id + '</td><td>' + obj.name + '</td><td>' + obj.email + '</td><td>' + obj.mobile + '</td><td>' + obj.start_date + '</td><td><a data-id="row-' + obj.id + '" href="javascript:editRow(' + obj.id + ');" class="btn btn-default btn-sm">edit</a>&nbsp;<a href="javascript:removeRow(' + obj.id + ');" class="btn btn-default btn-sm">remove</a></td></tr>');
						$('#add-modal').modal('hide');
					}).fail(function() { alert('Unable to save data, please try again later.'); });
				});

			});

			// Edit row
			function editRow(id) {
				if ( 'undefined' != typeof id ) {
					$.getJSON('datatable.php?edit=' + id, function(obj) {
						$('#edit-id').val(obj.id);
						$('#firstname').val(obj.name);
						$('#email').val(obj.email);
						$('#mobile').val(obj.mobile);
						$('#edit-modal').modal('show')
					}).fail(function() { alert('Unable to fetch data, please try again later.') });
				} else alert('Unknown row id.');
			}

			// Remove row
			function removeRow(id) {
				if ( 'undefined' != typeof id ) {
					$.get('datatable.php?remove=' + id, function() {
						$('a[data-id="row-' + id + '"]').parent().parent().remove();
					}).fail(function() { alert('Unable to fetch data, please try again later.') });
				} else alert('Unknown row id.');
			}
		</script>



</body>

</html>

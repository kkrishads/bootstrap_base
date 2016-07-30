<!DOCTYPE html>
<?php
$screenname="register";
include 'header.php';
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Register
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
							<li><a href="register.php">Register</a></li>
                            <li class="active">
                                <i class="fa fa-fw fa-edit"></i> New Register
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

        
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							
                                <h3 class="panel-title">Register</h3>
                            </div>
                            <div class="panel-body">
							 <label><u>Candidate Personal Informations:</u></label>
<!-- form here -->
<form method="post" action="new_register_submit.php" id="newregister">

 <div class="col-lg-6">
   <div class="form-group">
                                <label>Name*:</label>
                                <input class="form-control" type="text" name="catname" required/>
                  
                            </div>
							   <div class="form-group">
                                <label>Gender*:</label>
							<select class="form-control" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
								</div>
								
								   <div class="form-group">
                                <label>Date of Birth*:</label>
                                <input class="form-control" type="text" name="dob" placeholder="DD-MM-YYYY" required/>
                  
                            </div>
															   <div class="form-group">
                                <label>Time of Birth:</label>
                                <input class="form-control" type="text" name="birthtime"/>
                  
                            </div>
							
															   <div class="form-group">
                                <label>Month:</label>
                                <input class="form-control" type="text" name="month"/>
                  
                            </div>
									   <div class="form-group">
                                <label>Height:</label>
                                <input class="form-control" type="text" name="height"/>
                  
                            </div>
									   <div class="form-group">
                                <label>Weight:</label>
                                <input class="form-control" type="text" name="weight"/>
                  
                            </div>
									   <div class="form-group">
                                <label>Complexion:</label>
                              <select class="form-control" name="complexion" >
                                    <option value="">Select Complexion</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
                  
                            </div>
							
							 <div class="form-group">
                                <label>Education Qualification:</label>
								
                                <input class="form-control" type="text" name="eduqualification"/>
                  
                            </div>
							

 
 </div>
 
 
  <div class="col-lg-6">
 
 	 <div class="form-group">
                                <label>Rasi:</label>
								<table border="0" width="90%" align="center" id="rasi">
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
								
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
								
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
								
								
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
							
								</table>
                               </div>
							 <div class="form-group">
                                <label>Amsam:</label>	   
                  <table border="0" width="90%" align="center" id="amsam">
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
								
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
								
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="hidden" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
								
								
								<tr>
								<th>
								 <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								 </th>
								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								  								 <th>
								  <input class="form-control" style="width:100px;" type="text" name="techqualification"/>
								  </th>
								</tr>
							
								</table>
                                                 
                            </div>
							
							<div class="form-group">
							<br/>
                                <label>Star:</label>
                              <select class="form-control" name="complexion" >
                                    <option value="">Select Star</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
                  
                            </div>
							 <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" type="email" name="email" required/>
                  
                            </div>
							 <div class="form-group">
     <label>Phone/Mobile:</label>
    <input class="form-control" type="text" name="contact" />
   </div>
							
  <div class="form-group">
                                <label>Technical Qualification:</label>
                                <input class="form-control" type="text" name="techqualification"/>
                  
                            </div>
							 <div class="form-group">
							  <label></label>
							 
							  <input class="form-control" type="hidden"/>
							 </div>
 
 </div>
 
  	 <div class="col-lg-6">

 <label><u>Parents/Guardian Details:</u></label>
   	  <div class="form-group">
                                <label>Father/Guardian Name:</label>
								
                                <input class="form-control" type="text" name="contact" />
                  
                            </div>
							   
							 <div class="form-group">
                                <label>Father Age:</label>
                                <input class="form-control" type="text" name="fage" />
                  
                            </div>
			 <div class="form-group">
                                <label>Father Profession:</label>
                                <input class="form-control" type="text" name="fprofession" />
                  
                            </div>						
			 <div class="form-group">
                                <label>Father Income:</label>
                                <input class="form-control" type="text" name="fincome" />
                  
                            </div>	
		 <div class="form-group">
                                <label>Father Contact:</label>
                                <input class="form-control" type="text" name="fcontact" />
                  
                            </div>							
   </div>
   
   <div class="col-lg-6">

   	  <div class="form-group">
	  <br/>
                                <label>Mother Name:</label>
								
                                <input class="form-control" type="text" name="contact" />
                  
                            </div>
							   
							 <div class="form-group">
                                <label>Mother Age:</label>
                                <input class="form-control" type="text" name="fage" />
                  
                            </div>
			 <div class="form-group">
                                <label>Mother Profession:</label>
                                <input class="form-control" type="text" name="fprofession" />
                  
                            </div>						
			 <div class="form-group">
                                <label>Mother Income:</label>
                                <input class="form-control" type="text" name="fincome" />
                  
                            </div>	
		 <div class="form-group">
                                <label>Mother Contact:</label>
                                <input class="form-control" type="text" name="fcontact" />
                  
                            </div>	
							<br/>
							
   </div>
 
 
 	 <div class="col-lg-6">

 <label><u>Work and InCome Details:</u></label>

   	  <div class="form-group">
                                <label>Job Type:</label>
								
                                 <select class="form-control" name="jobtype" >
                                    <option value="">Select Job Type</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
                  
                            </div>
							   
							 <div class="form-group">
                                <label>Job Description:</label>
                                <textarea class="form-control" rows="5" cols="50" style="height:100px;" name="jobdesc"></textarea>
                  
                            </div>
							
   </div>
 

	 <div class="col-lg-6">
<div class="form-group">
<br/>
                                <label>Annual Income:</label>
                                <input class="form-control" type="text" name="fname"/>
                  
                            </div>
   	 
	  <div class="form-group">
                                <label>Office Address:</label>
                                <textarea class="form-control" rows="5" cols="50" style="height:100px;" name="officeaddr"></textarea>
                  
                            </div>						
   </div>
   


  <div class="col-lg-12">
  
   <label><u>Siblings Details:</u></label>
 <table class="table table-bordered table-hover table-striped">
  <thead>
 <tr>
 <th>
 Sibling
 </th>
 <th>
 Name</th>
 <th>Age</th>
 <th>Profession</th>
 <th>InCome</th>
 <th>Native</th>
 </tr>
  </thead>
   <tbody>
 <tr>
  <td>
  <select class="form-control" name="sibling[]" >
                                    <option value="">Select Sibling</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
   </td>
 <td>
   <input class="form-control" type="text" name="name[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="age[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="prof[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="income[]"/>
   </td>
    <td>
  <select class="form-control" name="native[]" >
                                    <option value="">Select Marital Status</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
   </td>
   </tr>
   <tr>
  <td>
  <select class="form-control" name="sibling[]" >
                                    <option value="">Select Sibling</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
   </td>
 <td>
   <input class="form-control" type="text" name="name[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="age[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="prof[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="income[]"/>
   </td>
    <td>
  <select class="form-control" name="native[]" >
                                    <option value="">Select Marital Status</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
   </td>
   </tr>
   
    <tr>
  <td>
  <select class="form-control" name="sibling[]" >
                                    <option value="">Select Sibling</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
   </td>
 <td>
   <input class="form-control" type="text" name="name[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="age[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="prof[]"/>
   </td>
    <td>
   <input class="form-control" type="text" name="income[]"/>
   </td>
    <td>
  <select class="form-control" name="native[]" >
                                    <option value="">Select Marital Status</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
   </td>
   </tr>
   </tbody>
  
 </table>
  </div>


   <div class="col-lg-6">
 <label><u>Other Property Details:</u></label>
   	<div class="form-group">
                                <label>Own House:</label>
                              <select class="form-control" name="complexion" >
                                    <option value="">Select Own House</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                  
                            </div>
   
   </div>
   
      <div class="col-lg-6">
<br/>
      <div class="form-group">
     <label>Place:</label>
    <input class="form-control" type="text" name="place" />
   </div>
   
   
   </div>
   <div class="col-lg-12">
  <div class="form-group">
     <label>Other Properties:</label>
	 <textarea class="form-control" rows="5" cols="100" style="height:100px;" name="otherproperties"></textarea>
   
   </div>
  </div>
  
        <div class="col-lg-6">
      <div class="form-group">
     <label>Current Address:</label>
    <textarea class="form-control" rows="5" cols="50" style="height:100px;" name="currentaddr"></textarea>
   </div>
     
   
   </div>
 
        <div class="col-lg-6">
      <div class="form-group">
     <label>Native Address:</label>
    <textarea class="form-control" rows="5" cols="50" style="height:100px;" name="nativeaddr"></textarea>
   </div>
     
   
   </div>
   <div class="col-lg-6">

   <div class="form-group">
                                <label>Display Status:</label>
                              <select class="form-control" name="complexion" >
                                    <option value="">Select Display Status</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                  
                            </div>


   </div>
 	   <div class="col-lg-12">
   
    <center>   <input class="btn btn-primary" type="submit" name="submit" value="Save" /></center>
   </div>
</form>
							
							
                               
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
					"ajax": "datatable.php?ajax"
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

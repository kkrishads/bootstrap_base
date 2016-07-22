<!DOCTYPE html>
<?php
session_start();
$custId="123";
if(isset($_GET['custId']) && $_GET['custId']!=""){
	$custId=$_GET['custId'];
}
$screenname="register";
include 'config.php';
include 'header.php';
$result=mysql_query("select * from cadidate_list where CATEID='$custId'");
$data=mysql_fetch_array($result);
if($data['CATEID']==null || $data['CATEID']!=$custId || $data['CATEID']==""){
	
} else {
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Customer Details
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
							<li><a href="register.php">Register</a></li>
                            <li class="active">
                                <i class="fa fa-fw fa-edit"></i> Edit Register
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
							
                                <h3 class="panel-title">Customer ID: <?php echo $custId; ?></h3>
                            </div>
                            <div class="panel-body">
							
<!-- form here -->
<form method="post" action="new_register_submit.php" id="newregister">

 <div class="col-lg-6">
   <div class="form-group">
                                <label>Name*:</label>
                                <input class="form-control" type="text" name="catname" value="<?php echo $data['CATENAME'];?>" required/>
                  
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
							 <div class="form-group">
                                <label>Technical Qualification:</label>
                                <input class="form-control" type="text" name="techqualification"/>
                  
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
                                <label>Customer ID*:</label>
                                <input class="form-control" type="text" name="custId" value="<?php echo $custId; ?>" readonly="" required/>
									
                            </div>
							 <div class="form-group">
                                <label>Password*:</label>
                                <input class="form-control" type="password" name="password" required/>
                  
                            </div>
							
							
 
 
 </div>

  <div class="col-lg-12">
   <!-- Siblings HERE-->
  </div>


   <div class="col-lg-6">
   <div class="form-group">
     <label>Guardian Name:</label>
    <input class="form-control" type="text" name="guardian" />
   </div>
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
      <div class="form-group">
     <label>Relation Ship:</label>
    <input class="form-control" type="text" name="relationship" />
   </div>
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
     <label>Phone/Mobile:</label>
    <input class="form-control" type="text" name="contact" />
   </div>
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
   
    <center>   <input class="btn btn-primary" type="submit" name="submit" value="Update" /></center>
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


<?php
}
?>

</body>

</html>

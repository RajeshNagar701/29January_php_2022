<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Employee</h2>   
                        <h5>Manage Employee Delete |  Edit  | Status  </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Employee Id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
											<th>Mobile</th>
                                            <th>Status</th>
											<th>Delete</th>
											<th>Edit</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty($emp_arr))
									{
										foreach($emp_arr as $data)
										{
										?>
											<tr class="odd gradeX">
											   <td><?php echo  $data->emp_id;?></td>
											   <td><?php echo  $data->name;?></td>
											   <td><?php echo  $data->unm;?></td>
											   <td><?php echo  $data->email;?></td>
											   <td><?php echo  $data->mobile;?></td>
											   <td><?php echo  $data->status;?></td>
											   <td><a href="delete?del_emp_id=<?php echo  $data->emp_id;?>" class="btn btn-danger">Delete</a></td>
											   <td><a href="#"  class="btn btn-primary">Edit</a></td>
											</tr>
                                    <?php
										}
									}
									else
									{
									?>
											<tr>
												<td colspan="8" align="center">Dat Not Found</td>
											</tr>
									<?php		
									}
									?>   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
             
                        
              
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

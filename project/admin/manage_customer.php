<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Customer</h2>   
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
                                            <th>Cust Id</th>
											<th>Image</th>
                                            <th>Name</th>
                                            <th>User_name</th>
                                            <th>Gender</th>
											<th>Country</th>
											<th>Status</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
									if(!empty($cust_arr))
									{
										foreach($cust_arr as $data)
										{
										?>
											<tr class="odd gradeX">
											   <td><?php echo  $data->cust_id;?></td>
											   <td><img src="../website/upload/customer/<?php echo  $data->img;?>" height="50px" width="50px"></td>
											   <td><?php echo  $data->name;?></td>
											   <td><?php echo  $data->user_name;?></td>
											   <td><?php echo  $data->gen;?></td>
											  
											   <td><?php echo  $data->cnm;?></td>
											   <td><a href="status?status_cust_id=<?php echo  $data->cust_id;?>" class="btn btn-primary"><?php echo  $data->status;?></a></td>
											   <td><a href="delete?del_cust_id=<?php echo  $data->cust_id;?>" class="btn btn-danger">Delete</a></td>
									
											</tr>
                                    <?php
										}
									}
									else
									{
									?>
											<tr>
												<td colspan="6" align="center">Dat Not Found</td>
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

<?php
include_once('header.php');
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage feedback</h2>   
                        <h5>Manage feedback Delete |  Edit  | Status  </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Feedback id</th>
                                            <th>Cust Id</th>
                                            <th>Comment(s)</th>
                                            <th>Delete</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
									if(!empty($fed_arr))
									{
										foreach($fed_arr as $data)
										{
										?>
											<tr class="odd gradeX">
											   <td><?php echo  $data->feed_id;?></td>
											   <td><?php echo  $data->cus_id;?></td>
											   <td><?php echo  $data->fed_comment;?></td>
											 
											   <td><a href="#">Delete</a></td>
									
											</tr>
                                    <?php
										}
									}
									else
									{
									?>
											<tr>
												<td colspan="4" align="center">Dat Not Found</td>
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

@extends('admin.layout.main_content');

@section('main_container')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Contact</h2>   
                        <h5>Manage Contact Delete |  Edit  | Status  </h5>
                       
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
						
							<form action="" method="post">
								<br>
								<input type="search" name="search" class="form-control" value="<?php if(isset($value)){ echo $value;}?>" placeholder="Search By Name">
								<br>
								<input type="submit" name="submit" value="Search" class="btn btn-primary">
							</form>	
							
							<br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Contact Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>Subject</th>
                                            <th>Desc</th>
											<th>status</th>
											<th>Delete</th>
											<th>Reply</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty($contact_arr))
									{
										foreach($contact_arr as $data)
										{
										?>
											<tr class="odd gradeX">
											   <td><?php echo  $data->contact_id;?></td>
											   <td><?php echo  $data->name;?></td>
											   <td><?php echo  $data->email;?></td>
											   <td><?php echo  $data->sub;?></td>
											   <td><?php echo  $data->decs;?></td>
											   <td><?php echo  $data->status;?></td>
											   <td><a href="delete?del_contact_id=<?php echo  $data->contact_id;?>" class="btn btn-danger">Delete</a></td>
											   <td><a href="reply?reply_contact_id=<?php echo  $data->contact_id;?>"  class="btn btn-primary">Reply</a></td>
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
    <script src={{url('admin_public/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src={{url('admin_public/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src={{url('admin_public/assets/js/jquery.metisMenu.js')}}"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src={{url('admin_public/assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src={{url('admin_public/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src={{url('admin_public/assets/js/custom.js')}}"></script>
    
   
</body>
</html>
@endsection
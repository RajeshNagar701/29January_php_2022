@extends('admin.layout.main_content');

@section('main_container')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Reply Client INQUIRY</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Reply Client INQUIRY
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Reply Client INQUIRY</h3>
                                    <form method="post" role="form">
                                        <div class="form-group">
                                            <label>To Email</label>
                                            <input type="email" name="to" value="<?php echo $fetch->email;?>"class="form-control" />   
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="sub" class="form-control" />   
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" name="msg"rows="3"></textarea>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-default">Reply</button>
                                       

                                    </form>
                                    <br />
                                    
                                    
                                 
    </div>
                                
                               
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src={{url('admin_public/assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src={{url('admin_public/assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src={{url('admin_public/assets/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src={{url('admin_public/assets/js/custom.js')}}"></script>
    
   
</body>
</html>
@endsection
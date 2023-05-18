<link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables/dataTables.bootstrap4.css"> 
<div class="content-wrapper">
  <section class="content">

 

  <div class="card">
      <div class="card-header">
        <div class="d-inline-block float-right">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;ERP User List</h3>
        </div>
        <div class="d-inline-block ">
          <?php //if($this->rbac->check_operation_permission('add')): ?>
            <!-- <a href="<?php echo base_url (); ?>main/erp_users" class="btn btn-success"> Add Email Master <i class="fa fa-plus"></i> </a> -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPromo"><i class="fa fa-plus"></i>
                                Add ERP Users
                            </button>
           


        </div>
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="addPromo" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <form action="<?php echo base_url('add_erp_users') ?>" method="POST"
                                                    enctype="multipart/form-data">

                                                    <label for="on click url">User Full Name<span
                                                            class="text-danger">*</span></label> <br>
                                                    <input required type="text" name="user_fullname"
                                                        placeholder="Enter Full Name" class="form-control" value=""
                                                        id="">


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">User Email<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <input required type="email" name="user_email" placeholder="Enter Email"
                                                    class="form-control" value="" id="">


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">User Password<span
                                                        class="text-danger">*</span></label> <br>
                                                <input required type="password" name="user_password"
                                                    placeholder="Enter Password" class="form-control" value="" id="">


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Select Role<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <select name="user_role" class="form-control" id="">
                                                    <option value="super_admin">Super Admin</option>
                                                    <option value="Design Admin">Design Admin</option>
                                                    <option value="Design user">Design user</option>
                                                    <option value="PPAP Admin">PPAP Admin</option>
                                                    <option value="PPAP USER">PPAP USER</option>
                                                    <option value="OPERATION DATA_ADMIN">OPERATION DATA_ADMIN</option>
                                                    <option value="OPERATION DATA_USER">OPERATION DATA_USER</option>
                                                    <option value="OTHER DATA_ADMIN">OTHER DATA_ADMIN</option>
                                                    <option value="OTHER DATA_USER">OTHER DATA_USER</option>
                                                    <option value="MIS/AUDIT DATA-ADMIN">MIS/AUDIT DATA-ADMIN</option>
                                                    <option value="MIS/AUDIT DATA-USER">MIS/AUDIT DATA-USER</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="on click url">Plant<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <select name="plant" class="form-control" id="">
                                                    <option value="P1">P1</option>
                                                    <option value="P2">P2</option>
                                                    <option value="P3">P3</option>
                                                    <option value="P4">P4</option>


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="on click url">Department<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <select name="department" class="form-control" id="">
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="D4">D4</option>


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="on click url">Plant Head <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="plant_head" class="form-control" id="">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Drawing Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="drawing_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Drawing Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="drawing_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">CAD Dwonload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="cad_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">CAD Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="cad_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Model Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="model_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Model Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="model_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 1 Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_1_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 1 Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_1_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 2 Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_2_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 2 Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_2_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">PPAP Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="ppap_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">PPAP Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="ppap_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Operation Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="operation_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Operation Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="operation_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Data Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_data_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Data Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_data_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="on click url">MIS/audit DATA Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="mis_data_download" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="on click url">MIS/audit DATA Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="mis_data_upload" class="form-control" id="">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                    </div>








                                </div>








                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





<div class="card">
      <div class="card-body table-responsive">
        <table id="na_datatable" class="table table-bordered table-striped" width="50%">
          <thead>
            <tr>
            <th>Sr No</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Role</th>

                                        <th>Drawing</th>
                                        <th>CAD </th>
                                        <th>MODEL </th>
                                        <th>OTHER DOC1 </th>
                                        <th>OTHER DOC2 </th>
                                        <th>PPAP DATA </th>
                                        <th>OPERATION DATA </th>
                                        <th>OTHER DATA </th>
                                        <th>MIS/audit DATA </th>
                                        <th>Plant</th>
                                        <th>Department</th>
                                        <th>Plant Head</th>
                                       
              <th width="200" class="text-left">Action</th>
            </tr>
            <?php  foreach ($records as $rec) {  
             
          ?>
          

  <!-- Modal -->
  <div class="modal fade" id="edit<?php echo  "{$rec['id']}";  ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <form action="<?php echo base_url('edit_erp_users') ?>" method="POST"
                                                    enctype="multipart/form-data">

                                                    <label for="on click url">User Full Name<span
                                                            class="text-danger">*</span></label> <br>
                                                    <input required type="text" name="user_fullname"
                                                        placeholder="Enter Full Name" class="form-control" value="<?php echo "{$rec['user_name']}"; ?>"
                                                        id="">
                                                        <input required type="hidden" name="id"
                                                        placeholder="Enter Full Name" class="form-control" value="<?php echo "{$rec['id']}"; ?>"
                                                        id="">


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">User Email<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <input required type="email" name="user_email" placeholder="Enter Email"
                                                    class="form-control" value="<?php echo "{$rec['user_email']}"; ?>" id="">


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">User Password<span
                                                        class="text-danger">*</span></label> <br>
                                                <input required type="password" name="user_password"
                                                    placeholder="Enter Password" class="form-control" value=" <?php echo "{$rec['user_pass']}"; ?>" id="">


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Select Role<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <select name="user_role" class="form-control" id="">
                                                    <option <?php if ($rec['user_type'] == "super admin") { echo "selected";} ?>  value="super admin">Super Admin</option>
                                                    <option <?php if ($rec['user_type'] == "Design Admin") { echo "selected";} ?> value="Design Admin">Design Admin</option>
                                                    <option <?php if ($rec['user_type'] == "Design user") { echo "selected";} ?> value="Design user">Design user</option>
                                                    <option <?php if ($rec['user_type'] == "PPAP Admin") { echo "selected";} ?> value="PPAP Admin">PPAP Admin</option>
                                                    <option <?php if ($rec['user_type'] == "PPAP USER") { echo "selected";} ?> value="PPAP USER">PPAP USER</option>
                                                    <option <?php if ($rec['user_type'] == "OPERATION DATA_ADMIN") { echo "selected";} ?> value="OPERATION DATA_ADMIN">OPERATION DATA_ADMIN</option>
                                                    <option <?php if ($rec['user_type'] == "OPERATION DATA_USER") { echo "selected";} ?> value="OPERATION DATA_USER">OPERATION DATA_USER</option>
                                                    <option <?php if ($rec['user_type'] == "OTHER DATA_ADMIN") { echo "selected";} ?> value="OTHER DATA_ADMIN">OTHER DATA_ADMIN</option>
                                                    <option <?php if ($rec['user_type'] == "OTHER DATA_USER") { echo "selected";} ?> value="OTHER DATA_USER">OTHER DATA_USER</option>
                                                    <option <?php if ($rec['user_type'] == "MIS/AUDIT DATA-ADMIN") { echo "selected";} ?> value="MIS/AUDIT DATA-ADMIN">MIS/AUDIT DATA-ADMIN</option>
                                                    <option <?php if ($rec['user_type'] == "MIS/AUDIT DATA-USER") { echo "selected";} ?> value="MIS/AUDIT DATA-USER">MIS/AUDIT DATA-USER</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="on click url">Plant<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <select name="plant" class="form-control" id="">

                                                          
                                                    <option <?php if ($rec['plant'] == "P1") { echo "selected";} ?> value="P1">P1</option>
                                                    <option  <?php if ($rec['plant'] == "P2") { echo "selected";} ?> value="P2">P2</option>
                                                    <option  <?php if ($rec['plant'] == "P3") { echo "selected";} ?> value="P3">P3</option>
                                                    <option  <?php if ($rec['plant'] == "P4") { echo "selected";} ?> value="P4">P4</option>


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="on click url">Department<span
                                                        class="text-danger">*</span></label>
                                                <br>
                                                <select name="department" class="form-control" id="">
                                                    <option <?php if ($rec['department'] == "D1") { echo "selected";} ?> value="D1">D1</option>
                                                    <option <?php if ($rec['department'] == "D2") { echo "selected";} ?> value="D2">D2</option>
                                                    <option <?php if ($rec['department'] == "D3") { echo "selected";} ?> value="D3">D3</option>
                                                    <option <?php if ($rec['department'] == "D4") { echo "selected";} ?> value="D4">D4</option>


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="on click url">Plant Head <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="plant_head" class="form-control" id="">
                                                    <option <?php if ($rec['plant_head'] == "no") { echo "selected";} ?> value="no">No</option>
                                                    <option <?php if ($rec['plant_head'] == "yes") { echo "selected";} ?> value="yes">Yes</option>


                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Drawing Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="drawing_download" class="form-control" id="">
                                                    <option  <?php if ($rec['drawing_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option  <?php if ($rec['drawing_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Drawing Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="drawing_upload" class="form-control" id="">
                                                    <option  <?php if ($rec['drawing_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option  <?php if ($rec['drawing_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">CAD Dwonload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="cad_download" class="form-control" id="">
                                                    <option  <?php if ($rec['cad_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option  <?php if ($rec['cad_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">CAD Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="cad_upload" class="form-control" id="">
                                                    <option <?php if ($rec['cad_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['cad_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Model Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="model_download" class="form-control" id="">
                                                    <option <?php if ($rec['model_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['model_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Model Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="model_upload" class="form-control" id="">
                                                    <option <?php if ($rec['model_upload'] == "yes") { echo "selected";} ?>  value="yes">Yes</option>
                                                    <option <?php if ($rec['model_upload'] == "no") { echo "selected";} ?>  value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 1 Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_1_download" class="form-control" id="">
                                                    <option <?php if ($rec['other_doc_1_download'] == "yes") { echo "selected";} ?>  value="yes">Yes</option>
                                                    <option <?php if ($rec['other_doc_1_download'] == "no") { echo "selected";} ?>  value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 1 Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_1_upload" class="form-control" id="">
                                                    <option <?php if ($rec['other_doc_1_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['other_doc_1_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 2 Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_2_upload" class="form-control" id="">
                                                    <option <?php if ($rec['other_doc_2_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['other_doc_2_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Doc 2 Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_doc_2_download" class="form-control" id="">
                                                    <option <?php if ($rec['other_doc_2_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['other_doc_2_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">PPAP Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="ppap_download" class="form-control" id="">
                                                    <option <?php if ($rec['ppap_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['ppap_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">PPAP Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="ppap_upload" class="form-control" id="">
                                                    <option <?php if ($rec['ppap_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['ppap_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Operation Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="operation_download" class="form-control" id="">
                                                    <option <?php if ($rec['operation_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['operation_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Operation Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="operation_upload" class="form-control" id="">
                                                    <option <?php if ($rec['operation_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['operation_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Data Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_data_download" class="form-control" id="">
                                                    <option <?php if ($rec['other_data_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['other_data_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="on click url">Other Data Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="other_data_upload" class="form-control" id="">
                                                    <option <?php if ($rec['other_data_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['other_data_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="on click url">MIS/audit DATA Download <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="mis_data_download" class="form-control" id="">
                                                    <option <?php if ($rec['mis_data_download'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['mis_data_download'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="on click url">MIS/audit DATA Upload <span
                                                        class="text-danger">*</span></label> <br>
                                                <select name="mis_data_upload" class="form-control" id="">
                                                    <option <?php if ($rec['mis_data_upload'] == "yes") { echo "selected";} ?> value="yes">Yes</option>
                                                    <option <?php if ($rec['mis_data_upload'] == "no") { echo "selected";} ?> value="no">No</option>

                                                </select>


                                            </div>
                                        </div>
                                    </div>








                                </div>








                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





          <?php  //print_r($records); die();  ?>
            <tr>
             <td > <?php echo "{$rec['id']}"; ?>  </td>
             <td> <?php echo "{$rec['user_name']}"; ?> </td>
              <td> <?php echo "{$rec['user_email']}"; ?></td>
              <td> <?php echo "{$rec['user_pass']}"; ?> </td>
              <td> <?php echo "{$rec['user_type']}"; ?> </td>

               <td><?php echo "Upload :" . $rec['drawing_upload'] . "<br><br>" . "Download :" . $rec['drawing_download'] ?>
               <td><?php echo "Upload :" . $rec['cad_download'] . "<br><br>" . "Download :" . $rec['cad_upload'] ?>
               <td><?php echo "Upload :" . $rec['model_download'] . "<br><br>" . "Download :" . $rec['model_upload'] ?>
               <td><?php echo "Upload :" . $rec['other_doc_1_download'] . "<br><br>" . "Download :" . $rec['other_doc_1_upload'] ?>
               <td><?php echo "Upload :" . $rec['other_doc_2_download'] . "<br><br>" . "Download :" . $rec['other_doc_2_upload'] ?>
               <td><?php echo "Upload :" . $rec['ppap_download'] . "<br><br>" . "Download :" . $rec['ppap_upload'] ?>

               <td><?php echo "Upload :" . $rec['operation_download'] . "<br><br>" . "Download :" . $rec['operation_upload'] ?>
               <td><?php echo "Upload :" . $rec['other_data_download'] . "<br><br>" . "Download :" . $rec['other_data_upload'] ?>
               <td><?php echo "Upload :" . $rec['mis_data_download'] . "<br><br>" . "Download :" . $rec['mis_data_upload'] ?>
              
               <td> <?php echo "{$rec['plant']}"; ?> </td>
               <td> <?php echo "{$rec['department']}"; ?> </td>
               <td> <?php echo "{$rec['plant_head']}"; ?> </td>
             

              <!-- <th width="200" class="text-right"><?php echo "{$rec['Name']}"; ?> </th> -->
              <th  width="200" class="text-left">
           <!-- <a font-size:50%; title="View" class="view btn btn-sm btn-info" href="<?php echo base_url()?>main/erp_users_list"> <i class="fa fa-eye"></i></a > -->
            <a title="Edit" class="update btn btn-sm btn-warning"  data-toggle="modal" data-target="#edit<?php echo  "{$rec['id']}";  ?>"> <i class="fa fa-edit"></i></a><br><br>

            <a title="Delete" class="delete btn btn-sm btn-danger" href="<?php echo base_url()?>welcome/delete_erp_users/<?php echo  "{$rec['id']}"; ?>" title="Delete" onclick="return confirm(\'Do you want to delete ?\')"> <i class="fa fa-trash"></i></a></th>
            </tr>

            <?php  }
              ?>
        
          </thead>
        </table>
      </div>
    </div>
    </section>  
</div>


<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.js"></script> 
   
   
   <script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable( {
    "processing": true,
    "serverSide": false,
    "ajax": "<?=base_url('main/masterlist')?>",
    "order": [[4,'desc']],
    "columnDefs": [
    { "targets": 0, "name": "id", 'searchable':true, 'orderable':true},
    { "targets": 1, "name": "Name", 'searchable':true, 'orderable':true},
  
    { "targets": 3, "name": "Action", 'searchable':false, 'orderable':false,'width':'50px'}
    ]
  });
</script>


<script type="text/javascript">
  $("body").on("change",".tgl_checkbox",function(){
    console.log('checked');
    $.post('<?=base_url("admin/users/change_status")?>',
    {
      '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
      id : $(this).data('id'),
      status : $(this).is(':checked') == true?1:0
    },
    function(data){
      $.notify("Status Changed Successfully", "success");
    });
  });
</script>
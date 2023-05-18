<link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables/dataTables.bootstrap4.css"> 
<div class="content-wrapper">
  <section class="content">
             <!-- Modal -->
             <div class="modal fade" id="addPromo" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-list"></i> &nbsp;Add</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('add_standard_library') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Document Name <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="document_name"
                                                            placeholder="Enter part_number" class="form-control"
                                                            value="" id="">

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Upload Operation Drawing <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="file" name="upload_operation_drawing"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Number <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="revision_number"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Remark<span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="revision_remark"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Date <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="date" name="revision_date"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>


                                         

                                            </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

             



  <div class="card">
      <div class="card-header">
        <div class="d-inline-block  float-right">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;Standard Library</h3>
        </div>
        <div class="card-header">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPromo"> <i class="fa fa-plus"></i>
                                Add Standard library
                            </button>
                        </div>

        <!-- <div class="d-inline-block">
          <?php //if($this->rbac->check_operation_permission('add')): ?>
            <a href="<?php echo base_url (); ?>main/masteradd" class="btn btn-success"> Add Master <i class="fa fa-plus"></i> </a>
         
        </div> -->
      </div>
    </div>


<div class="card">
      <div class="card-body table-responsive">
        <table id="na_datatable" class="table table-bordered table-striped" width="50%">
          <thead>
            <tr>
              <th>sr.no</th>
              <th>Document Name</th>
              <th>Upload Operation Drawing</th>
              <th>Revision Number</th>
              <th>Revision Remark </th>
              <th>Revision Date  </th>
              <th>Revision  </th>


              




             
              <th width="200" class="text-left">Action</th>
            </tr>
            <?php foreach ($records as $rec) {  
        // $name = $rec['name'];
        // $id = $rec['id'];
          ?>

         <!-- Modal -->
         <div class="modal fade" id="addPromo1<?php echo  "{$rec['id']}"; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-list"></i> &nbsp;Add Revision</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('add_standard_library_revision') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Document Name <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="document_name"
                                                            placeholder="Enter part_number" class="form-control"
                                                            value="<?php echo  "{$rec['document_name']}"; ?>" id="">

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Upload Operation Drawing <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="file" name="upload_operation_drawing"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Number <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="revision_number"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Remark<span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="revision_remark"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Date <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="date" name="revision_date"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>


                                         

                                            </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            


            <tr>
             <th > <?php echo "{$rec['id']}"; ?>  </th>
              <th><?php echo "{$rec['document_name']}"; ?></th>
              <th><a href="<?php echo base_url()?>welcome/download1/<?php echo  "{$rec['id']}"; ?>" class="fa fa-download"></a></th>

              <th><?php echo "{$rec['revision_number']}"; ?></th>
              <th><?php echo "{$rec['revision_remark']}"; ?></th>
              <th><?php echo "{$rec['revision_date']}"; ?></th>
              <th>
              <a title="" class="update btn btn-sm "  data-toggle="modal" data-target="#addPromo1<?php echo  "{$rec['id']}"; ?>"> <i class="btn btn-info btn-sm">Revision</i></a>
            </th>


            <td>
            
<a href="<?php echo base_url()?>welcome/list_standard_library_revision/<?php echo  "{$rec['document_name']}"; ?>"
    class="btn btn-primary">
    <i class="fa fa-history"></i>
</a>




</td>
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
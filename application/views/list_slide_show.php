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
                                    <form action="<?php echo base_url('add_slide_show') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                    <label for="on click url">Select Screen<span
                                                        class="text-danger">*</span></label> <br>

                                                <select name="select_screen" id="" class="select2 form-control">
                                                    <option value="screen-1">screen-1</option>
                                                    <option value="screen-2">screen-2</option>
                                                    <option value="screen-3">screen-3</option>
                                                    <option value="screen-4">screen-4</option>
                                                    <option value="screen-5">screen-5</option>
                                                </select>


                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Upload Image<span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="file" name="upload_image"
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
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;Slide Show</h3>
        </div>
        <div class="card-header">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPromo"> <i class="fa fa-plus"></i>
                                Add Slide Show
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
              <th>Screen Name</th>
              <th> Image</th>
            
              <th width="200" class="text-left">Action</th>
            </tr>
            <?php foreach ($records as $rec) {  
        // $name = $rec['name'];
        // $id = $rec['id'];
          ?>


            <tr>
             <th > <?php echo "{$rec['id']}"; ?>  </th>
              <th><?php echo "{$rec['select_screen']}"; ?></th>
              <th?</th>
             <th> <img src="<?php echo 'uploads/image/' .$rec['upload_image'] ; ?>"width="100" height="100"></th>
            
              <!-- <td>
                <a class="btn btn-success mt-1" href="<?php// echo base_url().$u->document_name; ?>">
                  Add Images
                      </a>
                </td> -->
                  <td>
                     <a class="btn btn-success mt-1"
                       href="<?php// echo base_url('show_images_new/').$u->document_name; ?>">
                        View Image Slider
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
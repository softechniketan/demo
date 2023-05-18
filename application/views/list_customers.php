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
                                    <form action="<?php echo base_url('add_customers') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="on click url">Name <span class="text-danger">*</span></label>
                                            <br>
                                            <input required type="text" name="name" placeholder="Enter Part family "
                                                class="form-control" value="" id="name">
                                            <input required type="hidden" name="table_name" value="design_index_master"
                                                placeholder="Enter Part family " class="form-control" value="" id="">


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
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;Customers</h3>
        </div>
        <div class="card-header">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPromo"> <i class="fa fa-plus"></i>
                                Add Customers
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
              <th>Customers Name</th>
             
              <th width="200" class="text-left">Action</th>
            </tr>
            <?php foreach ($records as $rec) {  
        $name = $rec['name'];
        $id = $rec['id'];
          ?>


            

                    
             <!-- Modal -->
             <div class="modal fade" id="edit<?php echo  "{$rec['id']}";  ?>" tabindex="-1" role="dialog"

    
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-list"></i> &nbsp;Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url('edit_customers') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label for="on click url">Name <span class="text-danger">*</span></label>
                                            <br>
                                            <input required type="text" name="name" placeholder="Enter Part family "
                                                class="form-control"  value="<?php  echo $name; ?>" id="name">
                                            <input required type="hidden" name="id" 
                                                placeholder="Enter Part family " class="form-control" value="<?php  echo $id; ?>" id="id">


                                        </div>
                                      
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save Change</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
          
            <tr>
             <th > <?php echo "{$rec['id']}"; ?>  </th>
              <th><?php echo "{$rec['name']}"; ?></th>
              

              <!-- <th width="200" class="text-right"><?php echo "{$rec['Name']}"; ?> </th> -->
              <th  width="200" class="text-left">
           <!-- <a font-size:50%; title="View" class="view btn btn-sm btn-info" href="<?php echo base_url('listmasters')?>"> <i class="fa fa-eye"></i></a > -->
            <a title="Edit" class="update btn btn-sm btn-warning" data-toggle="modal" data-target="#edit<?php echo  "{$rec['id']}";  ?>"> <i class="fa fa-edit"></i></a>


           
            <a title="Delete" class="delete btn btn-sm btn-danger" href="<?php echo base_url('')?>welcome/delete_customers/<?php echo  "{$rec['id']}"; ?>" title="Delete" onclick="return confirm(\'Do you want to delete ?\')"> <i class="fa fa-trash"></i></a></th>
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
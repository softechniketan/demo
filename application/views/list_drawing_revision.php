<link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables/dataTables.bootstrap4.css"> 
<div class="content-wrapper">
  <section class="content">
   
  <div class="card">
      <div class="card-header">
        <div class="d-inline-block  float">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp;Drawing Revision</h3>
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
           
            </tr>
            <?php foreach ($records as $rec) {  
        // $name = $rec['name'];
        // $id = $rec['id'];
          ?>

            <tr>
             <th > <?php echo "{$rec['id']}"; ?>  </th>
              <th><?php echo "{$rec['document_name']}"; ?></th>
              <th><a href="<?php echo base_url()?>welcome/download2/<?php echo  "{$rec['id']}"; ?>" class="fa fa-download"></a></th>

              <th><?php echo "{$rec['revision_number']}"; ?></th>
              <th><?php echo "{$rec['revision_remark']}"; ?></th>
              <th><?php echo "{$rec['revision_date']}"; ?></th>
             

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
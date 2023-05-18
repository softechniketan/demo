<link rel="stylesheet" href="<?php echo base_url() ?>plugins/datatables/dataTables.bootstrap4.css"> 
<div class="content-wrapper">
  <section class="content">

  <?php foreach ($parts as $part) {  
   // print_r($part);die();
     ?>
    <?php } ?>
 
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
                                    <form action="<?php echo base_url('add_design_documents') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Enter Document Name <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="document_name"
                                                            placeholder="Enter part_number" class="form-control"
                                                            value="" id="">

                                                            <input required type="hidden" name="part_number"
                                                            placeholder="Enter part_number" class="form-control"
                                                            value="<?php echo $part['part_number']; ?>" id="">
                                                            <input required type="hidden" name="part_description"
                                                            placeholder="Enter part_number" class="form-control"
                                                            value="<?php echo $part['part_description']; ?>" id="">

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Revision Number<span
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
                                                        <label for="on click url">Revision Date<span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="date" name="revision_date"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" id="">


                                                    </div>

                                                </div>
                                                
               
                                              
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="on click url">Upload Drawing<span
                                                                class="text-danger">*</span></label> <br>
                                                        <input type="file" name="upload_drawing"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="" required="" id="upload_drawing">


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
        
      <div class="row">
       

       <div  class="col-md-2" >
            <label for="">Part Number <span class="text-danger">*</span> </label>
            <input type="text" name="part_number" value="<?php echo $part['part_number']; ?>" readonly class="form-control">

       </div>

      <div  class="col-md-2" >
            <label for="">Part Description <span class="text-danger">*</span> </label>
            <input type="text" name="part_description" value="<?php echo $part['part_description']; ?>" readonly class="form-control">

      </div>
       <div  class="col-lg-4 mt-4" >

                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPromo"> <i class="fa fa-plus"></i>
                              Add Customer document
                     </button>
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
            <th>Document Name</th>
            <th>Document</th>
            <th>Revision Number </th>
            <th>Revision Remark </th>
            <th>Revision Date </th>
        
                                       

             
              <th width="200" class="text-left">Action</th>
            </tr>
            <?php foreach ($records as $rec) {  
        // $name = $rec['name'];
        // $id = $rec['id'];
          ?>


            

                    
             <!-- Modal -->

             <div class="modal fade" id="edit<?php echo  "{$rec['id']}";  ?>" tabindex="-1" role="dialog"
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
                                    <form action="<?php echo base_url('edit_parts') ?>" method="POST"
                                        enctype="multipart/form-data">


                                        <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="on click url">Part Number <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="part_number"
                                                            placeholder="Enter part_number" class="form-control"
                                                            value="<?php echo $rec['part_number'];  ?>" id="">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="on click url">Part Description <span
                                                                class="text-danger">*</span></label> <br>
                                                        <input required type="text" name="part_description"
                                                            placeholder="Enter Part Description" class="form-control"
                                                            value="<?php echo $rec['part_description'];  ?>" id="">


                                                    </div>

                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="on click url">Select Customer <span
                                                                class="text-danger">*</span></label> <br>
                                                        <select required name="customer_name"
                                                            class="form-control select2" id="customer_name">
                                                            <?php
                                                           
                                                            foreach ($customer as $g) {
                                                            ?>
                                                            <option value="<?php echo $g['name']; ?>">
                                                                <?php echo $g['name']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>


                                                    </div>

                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="on click url">Select Type <span
                                                                class="text-danger">*</span></label> <br>
                                                        <select required name="part_type" id="part_type"
                                                            class="form-control select2" id="">
                                                            <?php
                                                            foreach ($part_type as $g) {
                                                            ?>
                                                            <option data-name="<?php echo $g['name']; ?>"
                                                                value="<?php echo $g['name'] ?>"><?php echo $g['name']; ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                            <option value="" c></option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="on click url">Select Part family </label> <br>
                                                        <select name="part_family" id="part_family" class="form-control select2"
                                                            id="">
                                                            <?php
                                                            foreach ($part_family as $g) {
                                                            ?>
                                                            <option value="<?php echo $g['name']; ?>"><?php echo $g['name']; ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                            <option value="" c></option>
                                                        </select>


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
              <th><a href="<?php echo base_url()?>welcome/download/<?php echo  "{$rec['id']}"; ?>" class="fa fa-download"></a></th>

              <th><?php echo "{$rec['revision_number']}"; ?></th>
              <th><?php echo "{$rec['revision_remark']}"; ?></th>
              <th><?php echo "{$rec['revision_date']}"; ?></th>
              

    




              
              

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
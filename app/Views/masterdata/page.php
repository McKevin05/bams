<div class="row masterdata-sub-page">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 id_type-title">
                        <h4><?php echo $label?></h4>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button type="button" class="btn btn-success btn_masterdata" data-url='<?php echo base_url('masterdata')."/add/{$page}" ?>' data-bs-toggle="modal" data-bs-target="#add_item" data-url->
                        <i class="fas fa-plus-circle"></i> Add <?php echo $label?>
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($value as $key => $row): ?>
                                        <tr>
                                            <td><?php echo ++$key ?></td>
                                            <td><?php echo $row->DESC ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn_masterdata" data-url='<?php echo base_url('masterdata')."/{$page}/$row->ID/view" ?>' data-bs-toggle="modal" data-bs-target="#add_item"><i class="fas fa-edit"></i>  Edit</button>
                                                <button type="button" class="btn btn-danger btn_delete_masterdata" data-label='<?php echo $label ?>' data-id='<?php echo $row->ID ?>' data-name='<?php echo $row->DESC ?>'  data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="fas fa-trash"></i>  Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>                
                </div>
			</div>
		</div>
	</div>
</div>

<?php echo form_open(base_url('masterdata')."/{$page}/delete") ?>
    <?php echo view('masterdata/delete_item');?>
<?php echo form_close() ?>

<?php echo view('masterdata/add_item');?>
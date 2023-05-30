<div class="row masterdata-sub-page">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card_min618">
			<div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 id_type-title">
                        <h4><?php echo "Title Page"?></h4>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_item">
                        <i class="fas fa-plus-circle"></i> Add <?php echo "Title Page"?>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Yellow Card</td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i>  Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>                
                </div>
			</div>
		</div>
	</div>
</div>

<?php echo view('masterdata/add_item');?>
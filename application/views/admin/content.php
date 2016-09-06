 
 
<div class="col-xs-12 col-md-8" >
  <h1>Welcome to Content!</h1>
  <div id ="show_tables">
  	<table class="table table-striped">
  		<tr>
  			<th>Text</th>
  			<th>Created By</th>
  			<th>Date Created</th>
  			<th>Removed By</th>
  			<th>Date Removed</th>
  			<th>Action</th>
  		</tr>
  		<?php if($data) {  foreach ($data as $key => $val ) {
  			$created = date_create($val['datetime_added']);

  			$deleted = date_create($val['deleted_datetime']);
		?>
		<tr>
  			<td><?php echo $val['text'];?></td>
  			<td><?php echo $val['name'];?></td>
  			<td><?php echo date_format($created,"M d, Y H:i:s");?></td>
  			<td><?php echo $val['removed_by'];?></td>
  			<td><?php if($val['deleted_datetime']) echo date_format($deleted,"M d, Y H:i:s");?></td>
  			<td>
  				<button type="button" class="btn btn-primary btn-xs">
				  <span class="glyphicon glyphicon-edit" tooltip="Edit"aria-hidden="true"></span>
				</button>
				<button type="button" onclick="confirmDelete(<?php echo $val['id'];?>)" class="btn btn-danger btn-xs">
				  <span class="glyphicon glyphicon-minus-sign" tooltip="Delete" aria-hidden="true"></span>
				</button>
  			</td>
		</tr>
  			
  		<?php }} ?>
  	</table>
	<button class="btn btn-primary right"  data-toggle="modal" data-target="#add_data" data-whatever="@mdo"> Add</button>
  </div>

  <div class="modal fade" id ="add_data" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Content</h4>
	      </div>
	      <div class="modal-body">
		        <?php echo form_open('',array('class'=>'form-horizontal'));?>
		        <div class="form-group">
		            <?php echo form_label('Text','test');?>
		            <?php echo form_error('test');?>
		            <?php echo form_textarea('test','','class="form-control"');?>
		        </div>
		        <div class="form-group">
		            <?php echo form_error('created');?>
		            <?php echo form_hidden('created',date('Y-m-d H:i:s'));?>
		        </div>
		      

	      </div>
	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	        <?php echo form_submit('submit', 'Add', 'onClick="addItem()" class="btn btn-success btn-lg btn-block"');?>
	      </div>
				<?php echo form_close();?>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

  <p class="footer_p">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<script type="text/javascript">
	function confirmDelete(num) {
		console.log(num);
	    if (confirm("Are you sure?") == true) {
	        $.ajax({
				url: "content/remove",
				method: "POST",
				data: {
					id: num,
					deleted : $("input[name=created]").val()
				}
			}).done(function(response){
				window.location.reload();
			});
	    }
	}


	function addItem() {
					// alert($("textarea[name=test]").val());
		
	        $.ajax({
				url: "content/create",
				method: "POST",
				data: {
					val: $("textarea[name=test]").val(),
					created: $("input[name=created]").val()
				}
			}).done(function(response){
			});
	}
</script>
 
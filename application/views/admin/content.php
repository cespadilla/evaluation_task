 
 
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
  				<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-id ="<?php echo $val['id'];?>" data-value ="<?php echo $val['text'];?>"  data-target="#modify_data"  name="btn_edit">
				  <span name="btn_edit" class="glyphicon glyphicon-edit" data-whatever="@mdo"  tooltip="Edit"aria-hidden="true"></span>
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
	        <?php echo form_submit('submit', 'Add', 'onClick="addItem()" class="btn btn-success btn-lg btn-block"');?>
	      </div>
				<?php echo form_close();?>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id ="modify_data" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Content</h4>
	      </div>
	      <div class="modal-body">
		        <?php echo form_open('',array('class'=>'form-horizontal'));?>
		        <div class="form-group">
		            <?php echo form_label('Text','editTest');?>
		            <?php echo form_error('editTest');?>
		            <?php echo form_textarea('editTest','','class="form-control"');?>
		        </div>
		        <div class="form-group">
		            <?php echo form_error('updated');?>
		            <?php echo form_hidden('updated',date('Y-m-d H:i:s'));?>
		        </div>
		      

	      </div>
	      <div class="modal-footer">
	        <?php echo form_submit('modify', 'edit', 'onClick="modifyData()" class="btn btn-success btn-lg btn-block"');?>
	      </div>
				<?php echo form_close();?>
	    </div>
	  </div>
	</div>
  <p class="footer_p">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<script type="text/javascript">
var _id = "";
	function confirmDelete(num) {
	    if (confirm("Are you sure?") == true) {
	        $.ajax({
				url: "content/remove",
				method: "POST",
				data: {
					id: num,
					deleted : $("input[name=created]").val()
				}
			}).done(function(response){
				location.reload();
			});
	    }
	}

	function modifyData(){
		$.ajax({
				url: "content/modify",
				method: "POST",
				data: {
					id: _id,
					text : $("textarea[name=editTest]").val()
				}
			}).done(function(response){
				location.reload();
		});
	}


	function addItem() {
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

	$('#modify_data').on('show.bs.modal', function(e) {
        var $modal = $(this),
            span = e.relatedTarget;
            data = $(span).data();
            _id = data.id;
         	$("textarea[name=editTest]").val(data.value);
    })
</script>
 
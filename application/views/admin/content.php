 
 
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
     <?php foreach ($content as $key => $value) { ?>
        <tr>
          <td> <?php echo $value['text'];?></td>
          <td> <?php echo $value['name'];?></td>
          <td> <?php echo $value['datetime_added'];?></td>
          <td> <?php echo $value['removed_by'];?></td>
          <td> <?php echo $value['deleted_by_user_id'];?></td>
          <td>
              <button type="button" class="btn btn-primary btn-xs" onclick="location.href='admin/content/modify'" >
               <span name="btn_edit" class="glyphicon glyphicon-edit" ></span>
              </button>
              <button type="button" class="btn btn-danger btn-xs" >
                <span class="glyphicon glyphicon-minus-sign" tooltip="Delete" aria-hidden="true"></span>
              </button>
          </td>
        </tr>     
   <?php  }?>
  	</table>
	<button  onclick="location.href='admin/content/create'" class="btn btn-primary" > Add</button>
  </div>

  
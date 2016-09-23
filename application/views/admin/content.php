 
 
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
              <?php
                echo anchor('admin/content/modify/'.$value['id'],'<span name="btn_edit" class="glyphicon glyphicon-edit green" aria-hidden="true" ></span>');
                echo "   ";
                echo anchor('admin/content/remove/'.$value['id'],'<span name="btn_edit" class="glyphicon glyphicon-minus-sign red" aria-hidden="true" ></span>','onclick="return confirm(\'Are you sure you want to delete?\')"');
              ?> 
          </td>
        </tr>     
   <?php  }?>
  	</table>
	<button  onclick="location.href='admin/content/create'" class="btn btn-primary" > Add</button>
  </div>

  
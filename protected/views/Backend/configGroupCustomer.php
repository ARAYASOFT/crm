<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="glyphicon glyphicon-cog"></i> ประเภทลูกค้า</h3>
  </div>
  <div class="panel-body">
    <form class="form-inline" id="formGroupCustomer">
	 	<div class="form-group">
	      <label class="col-lg-2 control-label">ชื่อ</label>
	      <div class="col-lg-10">
	        <input class="form-control"  placeholder="ชื่อ ประเภทลูกค้า" type="text" name="name">
	        <input type="hidden" name="id" />
	      </div>
	    </div>
		<div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="button" class="btn btn-primary" onclick="return saveGroupCustomer()"><i class="glyphicon glyphicon-ok"></i> บันทึก</button>
	      </div>
	    </div>
	</form>

	<table class="table table-striped table-hover table-bordered" style="margin-top:20px;">
	  <thead>
	    <tr>
	      <th>ชื่อ</th>
	      <th width="190"></th>
	      
	    </tr>
	  </thead>
	  <tbody>
	  <?php foreach ($groupCustomers as $groupCustomer): ?>
	    <tr>
	      <td><?php echo $groupCustomer->name; ?></td>
	      <td>
			<a href="#" class="btn btn-success" 
				onclick="return editGroupCustomer(<?php echo $groupCustomer->id; ?>)">
					<i class="glyphicon glyphicon-pencil"></i> EDIT
			</a>
			<a href="#" class="btn btn-primary" 
				onclick="return deleteGroupCustomer(<?php echo $groupCustomer->id; ?>)">
					<i class="glyphicon glyphicon-remove"></i> DELETE
			</a>
	      </td>
	      
	    </tr>
	   <?php endforeach; ?>
	  </tbody>
	</table>





</div>

  </div>
</div>
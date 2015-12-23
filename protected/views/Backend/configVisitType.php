<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="glyphicon glyphicon-cog"></i> ประเภทการติดต่อ</h3>
  </div>
  <div class="panel-body">
    <form class="form-inline" id="formVisitType">
	 	<div class="form-group">
	      <label class="col-lg-2 control-label">ชื่อ</label>
	      <div class="col-lg-10">
	        <input class="form-control"  placeholder="ประเภทการติดต่อ" type="text" name="name">
	        <input type="hidden" name="id" />
	      </div>
	    </div>
		<div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="button" class="btn btn-primary" onclick="return saveVisitType()"><i class="glyphicon glyphicon-ok"></i> บันทึก</button>
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
	  <?php foreach ($visitTypes as $visitType): ?>
	    <tr>
	      <td><?php echo $visitType->name; ?></td>
	      <td>
			<a href="#" class="btn btn-success" 
				onclick="return editVisitType(<?php echo $visitType->id; ?>)">
					<i class="glyphicon glyphicon-pencil"></i> EDIT
			</a>
			<a href="#" class="btn btn-primary" 
				onclick="return deleteVisitType(<?php echo $visitType->id; ?>)">
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
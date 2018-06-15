<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center"><?php print_r($data['title']) ?></h2>
			<?php Session::showMessage() ?>
			<br>
			<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
    			<label for="surname" class="col-sm-2 control-label">Surname <span style="color: red;">*</span></label>
    			<div class="col-sm-10">
					<div class="input-group">
    					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input type="text" class="form-control surname" id="surname" placeholder="Surname" name="surname">
      					<span class="glyphicon form-control-feedback"></span>
      				</div>
              		<span class="text-muted"></span>
    			</div>
  			</div>
			<div class="form-group">
    			<label for="email" class="col-sm-2 control-label">Email <span style="color: red;">*</span></label>
    			<div class="col-sm-10">
    				<div class="input-group">
	       				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      					<input type="email" class="form-control email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email">
      					<span class="glyphicon form-control-feedback"></span>
    				</div>
              		<span class="text-muted"></span>
    			</div>
  			</div>
  			<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary" name="butLog" id="butLog">Sign in</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>
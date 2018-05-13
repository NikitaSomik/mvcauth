<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!-- <h1 class="text-center text-primary"><?= $data['title'] ?></h1>
			<div><?=$data['content'] ?></div> -->
			<h2 class="title text-center">Register</h2>
      <?php Session::showMessage() ?>
			<br>
			<form id="formReg" action="<?=$_SERVER['PHP_SELF'];?>" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
    				<label for="name" class="col-sm-2 control-label">Name <span style="color: red;">*</span></label>
    				<div class="col-sm-10">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input type="text" class="form-control name" id="name" placeholder="Name" name="name">
      					<span class="glyphicon form-control-feedback"></span>
      				</div>
              <span class="help-block"></span>
    				</div>
  				</div>
  				<div class="form-group">
    				<label for="surname" class="col-sm-2 control-label">Surname <span style="color: red;">*</span></label>
    				<div class="col-sm-10">
						  <div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input type="text" class="form-control surname" id="surname" placeholder="Surname" name="surname">
      					<span class="glyphicon form-control-feedback"></span>
      				</div>
              <span class="help-block"></span>
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
              <span class="help-block"></span>
    				</div>
  				</div>
  				<div class="form-group">
            <label for="gender" class="col-sm-2 control-label labelGender">Gender</span></label>
  					<div class="col-sm-2">
  						<label class="radio-inline"> 
							<input type="radio" name="gender" id="gender" class="gender" value="male"> Male
						</label>
						<label class="radio-inline">
 							<input type="radio" name="gender" id="gender" class="gender" value="female"> Female
						</label>
					</div>
				</div>
  				<div class="form-group">
            <label for="date" class="col-sm-2 control-label labelBirth">Birthday</span></label>
  					<div class="col-sm-2">
  						<input type="date" name="birthday" id="date" class="birthday">
					</div>
          <span class="help-block"></span>
				</div>
				
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary" name="butReg" id="butReg">Sign up</button>
				    </div>
				</div>
			</form>

		</div>
		<!-- <div class="col-md-12">
			<td><a href="<?= URL ?>/user/edit/<?= $data['content'][$i]['$id'] ?>"> </a></td>
		</div> -->
	</div>
</div>

<?php 

// foreach ($arr as $value) {
//   echo $value.'<br>';
// }
// var_dump(stripslashes($_POST['name']));


// var_dump($arr);
// var_dump($data);
//echo '<pre>', print_r($_POST), '</pre>';
echo '<pre>', print_r($arr), '</pre>';
echo '<pre>', print_r($data), '</pre>';
?>
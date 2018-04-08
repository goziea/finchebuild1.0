<?php include_once("header.php"); ?>



 <div class="content-wrapper">
    <div class="container-fluid">
      <h3> Password and Security </h3>

                  <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-body">
            	<label>Current Password</label>
            	<form>
	            	<input type="Password" name="password" class="form-control">

	            	<label>New Password</label>
	            	<input type="Password" name="new" class="form-control">

	            	<label>Confirm Password</label>
	            	<input type="Password" name="confirm" class="form-control">

	            	<br>
	            	<button class="btn btn-default">Update</button>
	            </form>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>



<?php include_once("footer.php"); ?>
<div class="innersignup">
						<h3>Sign up to receive our free downloadable LOTIS ® QX-C whitepaper.</h3>
						<?php if(isset($_SESSION['flash_message'])){ ?>
		<div class="alert alert-success"><?= $_SESSION['flash_message']  ?></div>
	<?php 
		unset($_SESSION['flash_message']);
	} ?>
						<form method="post" action="forms/register.php" > 
							 <div class="form-group"><input type="text" placeholder="NAME" name="name" class="form-control" required /></div>
							 <div class="form-group"><input type="email" placeholder="EMAIL" name="email" class="form-control" required /></div> 
							 <div class="form-group"><input type="submit" value="SUBMIT" class="btn btn-sub " /></div> 
							
						</form>
					</div>
<div class="row" style="margin-left:0px; margin-right:0px;">

	<div class="col-md-12 col-sm-12 clearfix " style="background-color:#ffffff; box-shadow: 0px 10px 30px 0px rgba(82,63,105,0.08); border-radius: 5px;">


		<!-- Profile Info -->
		<ul class="user-info pull-right pull-none-xsm" style="margin-top: 6px;">
			<li class="profile-info dropdown pull-right"><!-- add class "pull-right" if you want to place this from right -->
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					
					<?php
						$name = $this->session->userdata('name');
						echo $name;
					?>

					<div style="margin-top: -15px;
							    font-size: 10px;
							    text-align: left;
							    padding-left: 53px;
							    color: #707696;">
						<p style="<?php if($this->session->userdata('login_level') == 'admin') echo'margin-top: 0px'; ?>"><?php echo $this->session->userdata('login_level');?></p>
					</div>
				</a>
				
				<ul class="dropdown-menu">
					<li class="caret"></li>
					
					<li>
						<a href="#">
							<i class="flaticon-rotate"></i>Edit profile
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="flaticon-lock"></i>Ganti password
						</a>
					</li>
					
					<li>
						<a href="<?php echo site_url('login/logout'); ?>">
							<i class="flaticon-paper-plane-1"></i>Logout
						</a>
					</li>
					
				</ul>
			</li>
		
		</ul>
	</div>

</div>

<hr style="margin-top:0px;" />

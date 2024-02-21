<style type="text/css">
	.flexex{
		width: 100%;
		height: auto;
		word-wrap: break-word;
	}	
	@media(min-width: 700px){
		.getter{
			padding: 10px;
			margin:5px;
		}
		.flexex{
			display: flex;
		}
	}
	.wd100{
		width: 100%;
	}
	.getter{
		height: auto;
			background-color: #f8f9fa;
			text-align: left;
			border-radius: 5px;
			width: 100%;
			padding: 10px;
			margin:2px;
	}
	.imgs{
		position: relative;
		width: 440px;
		height: 350px;
		overflow: hidden;
	}
	.m_img{
		position: absolute;
		top:0;
		left:0;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
</style>


<div class="flexex">

		

			<div class="getter">

				<div class="getter bg-dark" style="height: 350px;border-radius: 0;">
					
					<div class="alert alert-light">
						Skiyen
					</div>
					<div class="alert-light alert">
						Meet friends and lots more...<br>
						Join skiyen today<br>
					</div>
					<div class="alert-light alert">
						<button onclick="window.location = 'login';" class="btn btn-secondary wd100">Login</button>
						<br>
						<br>
						<button onclick="window.location = 'register/';" class="btn btn-dark wd100">Register</button>
					</div>
				</div>

			</div>

			<div class="getter">
			<div class="imgs">
				<?php

				include("image.php");

				?>
			</div>
			</div>

	


</div>
<div class="getter">
<iframe class="st_box" src="https://skiyen.business.site" title="Skiyen" style="width: 100%;border:none;outline: none;height: 400px;"></iframe>


			</div>




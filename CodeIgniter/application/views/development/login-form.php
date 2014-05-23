<!DOCTYPE HTML>
<html>
	<head>
		<script type="text/javascript" src="<?php echo base_url().'jquery/';?>lib.js"></script>
		<script type="text/javascript">
		$document.ready(function())
			$.ajax({
				url:'development/check_login.php',
				dataType:,
				data:,
				method:,
				success:function(data){
					},
				error:function(){

				}
			});
		</script>
	</head>
	<body>		
		<div>
			<label for="username">Username</label>
			<input type="text" name="username"/>
			<br>

			<label for="password">Password</label>
			<input type="password" name="password"/>
			<br>

			<input type="submit" value="Log in"/>
			</form>
		</div>
	</body>
</html>
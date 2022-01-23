<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
	<?php include 'lib/Database.php';
	$db = new Database;
	session_start();
	?>
<div class="container">
	<section id="content">
		<?php
			if(isset($_POST['login'])){
				$username 	=	$_POST['username'];
				$password 	=	$_POST['password'];
				
				$catquery="SELECT * FROM admin_info where usur_name='$username' && 	password='$password'";
                  $category=$db->select($catquery);
                  if($category){
                  while ($result=$category->fetch_assoc()) {
                    $_SESSION['id'] =  $result['id'];
                    header('location:index.php');
                }
              }
              else{
                echo "<p style='color:red; font-size:12px;'>User name or password is rong <p/>";
              }
			}
		?>
		<form action="" method="post">
			<h1>Admin Login</h1>
			<p>Username : admin</p>
			<p>Password : 123456</p> <br>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="login" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Richwok It Ltd</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
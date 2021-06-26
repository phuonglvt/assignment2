<?php
	include("local_config.php");
	#ob_start();
	session_start();
	$error = "";
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		// username and password sent from form 
		$login_user = $_POST['username'];
		$login_pwd = $_POST['password']; 
		# Create connection to Heroku Postgres
		$pg_heroku = pg_connect($conn_string);
		# Get data by query
		$sql = "SELECT * FROM user_table WHERE username = '$login_user' and password = '$login_pwd'";
		$result = pg_query($pg_heroku,$sql);
		
		$num_rows = pg_num_rows($result);

		// If result matched $login_user and $login_pwd, table row must be 1 row
		if($num_rows == 1) 
		{
			$row = pg_fetch_array($result, 0);
			$_SESSION["name"] = $row['username'];
			$_SESSION["shop"] = $row['shop_name'];
			$shop = $row['shop_name'];
			if ($shop == "DIRECTOR")
			{
				header("location: director.php");
			}
			else
			{
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'crud.php';
				#header("Location: http://$host$uri/$extra?shop=$shop");
				header("location: crud.php/");
			}
		}
		else 
		{
			$error = "Your Login Name or Password is invalid";
		}
		pg_close();
    }	
?>

<html> 

   <head>
	
      <title>ATN Login Page</title>
      
 <link rel="stylesheet" type="text/css" href="style.css">
   </head>
  
   
   <body bgcolor = "#FFFFFF">
		<center>
            <table width="990px">
                <tr>
                    <td colspan="3"><img src="banner.jpg" width="1200px"></td>
                </tr>
			</table>
		</center>
	</body>
	 <h1> Welcome to ATN shop of Phuonglvt Toy World <h1/>
	 <body>
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
                <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = "Submit"/><br />
				</form>
                <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> 
				<form action="" method="post">
				<input type="submit" name="Main_menu"
					value="Return menu"/> <br></br>
				</form>
				<?php
					$shop = $_SESSION["shop"];
					if(isset($_POST['Main_menu']))
					{
					header("Location: index.php");
					}
				?>
            </div>				
         </div>			
      </div>
		 <?php
		include("footer.php");
	  ?>
   </body>
</html>

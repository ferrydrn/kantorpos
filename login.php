<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" /> 

  <style>	
		body {
		    font-family: Georgia, times new roman, Times, Merriweather, Cambria, Times, serif;
		    font-weight: 300;
		    font-size: 20px;
		    line-height: 2;
		    background: url(https://www.ahmadsyarifudin.id/template/2020/assets/images/bg/body-bg.png) no-repeat center;
		    color: #4d4b4b;
		}
		.centerDiv {
			height: 100vh;
			width: 100%;
		}
	</style>

  </head>

<body>
	
	<div id="box">
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2 class="fw-bold">Login</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
<form method="post">
<p class="fw-bold">Jabatan :</p>
<div class="form-check">
  <input value="pegawai" class="form-check-input" type="radio" name="jabatan" id="pegawai">
  <label class="form-check-label" for="pegawai">
  <?php if (isset($jabatan) && $jabatan=="pegawai") echo "checked";?>
    Pegawai
  </label>
</div>
<div class="form-check mb-3">
  <input value="admin" class="form-check-input" type="radio" name="jabatan" id="admin">
  <label class="form-check-label" for="admin">
  <?php if (isset($jabatan) && $jabatan=="admin") echo "checked";?>
  Admin
  </label>
</div>

<div class="mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input id="text" name="username" type="text" class="form-control" id="username" aria-describedby="username" />
              </div>
			  <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input id="text" name="password" type="password" class="form-control" id="password" aria-describedby="password" />
              </div>
			  <center>
			  <input class="btn btn-primary" id="button" type="submit" value="Login"><br><br>
			</center>
		</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$jabatan = $_POST['jabatan'];
		$admin= 'admin';
		$pegawai= 'pegawai';
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from data_pegawai where username = '$username' limit 1";
			$result = mysqli_query($con, $query);
			

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					 
					if(($user_data['password'] === $password)&&($jabatan  === $admin))
					{

						$_SESSION['id_pegawai'] = $user_data['id_pegawai'];
						header("Location: admin.php");
						die;
					}
					if(($user_data['password'] === $password)&&($jabatan === $pegawai))
					{

						$_SESSION['id_pegawai'] = $user_data['id_pegawai'];
						header("Location: barang-pegawai.php");
						die;
					}
						 
				}
			}
			
			echo "<p align=center>(Salah username dan password untuk  $jabatan)</p>";
		}else
		{
			echo "<p align=center>(Salah username dan password untuk  $jabatan)</p>";
		}
	}

?>



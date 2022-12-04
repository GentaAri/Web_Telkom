
<?php
	if(isset($_POST['submit']))
	{
		include 'include/koneksi.php';

		$username =  $_POST['username'];
		$pass = $_POST['password'];
		$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '".$username."' AND password = '".$pass."' "); 

		$data = mysqli_fetch_array($query);
		$user_login = $data['username'];
		$user_role = $data['role'];


		if (mysqli_num_rows($query)>0) 
		{
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $user_role;
			if ($user_role == 'Admin' || $user_role == 'admin' ) 
			{
				header('location: admin/index.php');
			}
			elseif ($user_role == 'Member' || $user_role == 'member') 
			{
				header('location: member/index.php');
			}
		} 
		else 
		{
		// echo "<script>alert('Username atau password yang Anda masukan SALAH'); window.history.back(); location.reload();</script>";
			header('location: 404.php');
		}
	}
?>

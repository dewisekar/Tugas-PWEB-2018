<?php
	include "dbconnect.php";
	$username = @$_POST['username'];
	$password = @$_POST[ 'password'];
	$submit = @$_POST[ 'submit'];
	$pwdmd5 = md5($password);

	if($submit)
	{

		$sql = mysqli_query($con, "select * from users where username = '$username' and password = '$pwdmd5'") or die (mysqli_error());
		$sql2 = mysqli_query($con, "select name from users where username = '$username'") or die (mysqli_error());
		$cek = mysqli_num_rows($sql);
		$row = mysqli_fetch_assoc($sql2);
			if ($cek > 0) {			
            session_start();
            $_SESSION["username"] = $username;            
            $name = $row['name'];
            $_SESSION["name"] = $name;
            header('location: admin.php');
        }
        else
        {
        	?>
        	 <script type="text/javascript">
                alert("Registrasi Terlebih Dahulu!");
                window.location.href="register.php";
            </script>
            <?php
        }
    }
    
?>


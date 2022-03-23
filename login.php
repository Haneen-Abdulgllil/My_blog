<?php 
require('config/config.php'); 
require('config/db.php'); 
?>
<?php 
include'inc/header.php';
session_start();


// for checking user is exist or not
function checkUser($email,$password){
    global $conn;
    $query="SELECT * FROM users WHERE (email='$email') && password=$password";

    $run = mysqli_query($conn,$query);
    $return_data = mysqli_fetch_assoc($run) ?? array();
    return $return_data;
}

//for loging user
if(isset($_GET['login'])){
	$userdata = checkUser($_POST['email'],$_POST['password']);
	
	if(count($userdata)>0){
		$_SESSION['userdata']=$userdata;
		$_SESSION['Auth']=true;
		header("location:../../");
	}else{
		$_SESSION['error']['field'] = 'nouser' ;
		$_SESSION['error']['msg'] = 'User not registered !' ;
		header("location:../../?login");
	}
	
	}


?>

<div class="container">
<div class="shadow p-5 col-6 m-auto mt-5 rounded border" style="">


<form method="post" action="admin_post.php">
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email address</label>
		<input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Password</label>
		<input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
		</div>
		<div class="d-flex justify-content-between align-items-center">
		<button type="submit" class="btn btn-primary" name="login">Login</button>
		<a href="#" class="text-decoration-none">Forgot Paassword ?</a>
</div>
</form>
</div>


</div>

<?php 
include('inc/footer.php');
?>	
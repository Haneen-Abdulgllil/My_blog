<?php 
    require('config/config.php'); 
	require('config/db.php'); 

	if(isset($_POST['submit'])){
		// get from data

		$title  = mysqli_real_escape_string($conn, $_POST['title']);

		$post_img = $_FILES['post-img']['name'];
		$temp_name = $_FILES['post-img']['tmp_name'];
		move_uploaded_file(	$temp_name, "images/".$post_img);
	

		$author = mysqli_real_escape_string($conn, $_POST['author']);
		$body   = mysqli_real_escape_string($conn, $_POST['body']);

		$query = "INSERT INTO posts(title, img , author, body) VALUES ('$title', '$post_img' ,'$author','$body')";

	
		if(mysqli_query($conn, $query)){
			header('Location: admin_post.php');
		} else{
			echo "Error" . mysqli_error($conn);
		}
	}
?>

<?php 
	include'inc/admin_header.php';
?>
	<!-- navbar -->
	<!-- navbar -->
	<div class="container">
		<h2 class="text-center">Add New Post</h2>
		<form method="POST" action=" addpost.php"  enctype="multipart/form-data"> 
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" required>
			</div>

			
			<div class="form-group">
			<label for="" class="col-md-6 control-label">Post Image </label>
			<input type="file" name="post-img" class="form-control p-1" required="">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" id="" cols="30" rows="5" class="form-control" required></textarea>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
	</div>
		
<?php 
	include('inc/footer.php');
?>
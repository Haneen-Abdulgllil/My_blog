<?php 
	require('config/config.php'); 
	require('config/db.php'); 

	//get id
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	//create query
	$query = 'SELECT * FROM posts WHERE id ='.$id;

	//get result
	$result = mysqli_query($conn, $query);

	//fetch data
	$post = mysqli_fetch_assoc($result);
	
    
?>
<?php 
	include'inc/admin_header.php';
?>
	<div class="container m-5">
		<div class="card" style="width: 70rem;">
		<img src="images/<?php echo $post['img']  ?>" alt="">
			<div class="card-body">
				<h5 class="card-title"><?php echo $post['title']; ?></h5>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Created On <?php echo $post['created_at']; ?></li>
				<li class="list-group-item">by <?php  echo $post['author'] ?></li>
			</ul>
			<div class="card-body">
			<p><?php echo $post['body'] ?></p>
			</div>
		</div>
		<hr>
		<a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a> 
		<a href="deletepost.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
		</div>

	

	</div>
		
<?php 
	include ('inc/footer.php');
?>
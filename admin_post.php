<?php 
    require('config/config.php'); 
	require('config/db.php'); 

	//create query
	$query = "SELECT * FROM posts ORDER BY created_at DESC";

	//get result
	$result = mysqli_query($conn, $query);

	//fetch data
	$posts = mysqli_fetch_all($result);
	


	$query1 = "SELECT * FROM users";
	$result1 = mysqli_query($conn, $query1);
	$posts1 = mysqli_fetch_array($result1);

?>

<?php 
		include'inc/admin_header.php';
?>
	<!-- navbar -->
	
	<div class="container"> 
		<h2 class="text-center">Admin Dashboard</h2>
		<h3 class="text-center" style = "color: blue;">Hello <?php echo $posts1['1']; ?></h3>
		<?php foreach($posts as $post):
		?>
	
		<div class="alert alert-secondary display" id="example">	
			<h3><?php echo $post['1'] ?></h3>
			<div>

				<img src="<?php echo $post['2']  ?>" alt="">
			</div>
		
			<small>Created On <?php echo $post['5']; ?> by <?php  echo $post['4'];?></small>
			<p><?php echo substr($post['3'], 0,20) . '.....' ?></p>
			<a class="btn btn-info" href="post_manage.php?id=<?php echo $post['0']; ?>">Read More</a>
		</div>
        
		
		<?php endforeach ?>
		
			
	
	</div>
		
<?php 
	include('inc/footer.php');
?>
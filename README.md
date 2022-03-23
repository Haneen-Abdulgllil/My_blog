# php-simple-blog
This project for beginners 



	<div class="container m-5">
		<div class="card" style="width: 70rem;">
		<img src="images/<?php echo $post['img']  ?>" alt="">
			<div class="card-body">
				<h5 class="card-title"><?php echo $post['title']; ?></h5>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Created On <?php echo $post['created_at']; ?></li>
				<li class="list-group-item">by <?php  echo $post['author'] ?></li>
				<!-- <li class="list-group-item">A third item</li> -->
			</ul>
			<div class="card-body">
			<p><?php echo $post['body'] ?></p>
			</div>
		</div>
		</div>


	</div>
<h2> <?php  echo $title; ?></h2>
<?php
 foreach ($posts as $key => $post) {
   ?>
   <h2> <?php echo $post['title'];  ?></h2>
   <div class="row">
     <div class="col-md-3">
       <img class="post-thumb image img-thumbnail img-responsive" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
     </div>
     <div class="col-md-9">
       <small class="post-date"> <?php  echo "Posted on: ".$post['created_at']; ?> in <strong> <?php echo $post['name']; ?></strong></small>
       <p style="text-align:justify;"> <?php echo word_limiter($post['body'] , 60); ?></p>
       <p> <a class="btn btn-success" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> Read More </a></p>
     </div>
   </div>
<?php
 }
 ?>
<div class="pagination-links">
 		<?php echo $this->pagination->create_links(); ?>
</div>

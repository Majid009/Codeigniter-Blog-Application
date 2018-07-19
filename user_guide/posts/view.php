<h2>  <?php echo $post['title']; ?></h2>
<small class="post-date"> <?php  echo "Posted on: ".$post['created_at']; ?> </small>
<img class="post-thumb image img-thumbnail img-responsive" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
<p style="text-align:justify;"> <?php echo $post['body']; ?></p>

<?php if($this->session->userdata('user_id') == $post['user_id']) { ?>
    <hr>
    <a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left"> Edit </a>
    <?php echo form_open('posts/delete/'.$post['id']); ?>
    &nbsp;  <input type="submit" value="Delete" class="btn btn-danger">
    </form>
<?php } ?>
<hr>
<h3> Comments </h3>
<?php if($comments){
    foreach ($comments as $comment) {  ?>
      <div class="well">
        <?php echo $comment['body']." by <strong>".$comment['name']."</strong>"; ?>
    </div>
<?php  } ?>
    <?php
} else {
    echo "<p> No Comment to Display </p>";
}
?>
<hr>
<h3> Add Comment </h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" placeholder="Email" class="form-control">
  </div>
  <div class="form-group">
    <label>body</label>
    <textarea type="text" name="body" placeholder="Add comment" class="form-control"></textarea>
  </div>
  <input type="hidden" name="slug" value="<?php echo $post['slug'] ?>">
  <button type="submit" class="btn btn-success">Submit</button> <br><br>
</form>

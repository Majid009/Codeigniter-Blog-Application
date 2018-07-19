<h2> <?php  echo $title; ?></h2>

<?php  echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
 <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label> Title</label>
    <input type="text" name="title" placeholder="Add Title" class="form-control" value="<?php echo $post['title']; ?>">
  </div>

  <div class="form-group">
    <label> Body </label>
    <textarea id="my_editor" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body'];?></textarea>
  </div>
  <div class="form-group">
    <label> category </label>
    <select class="form-control" name="category_id">
      <?php foreach ($categories as $category) { ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary"> Submit </button>
</form>

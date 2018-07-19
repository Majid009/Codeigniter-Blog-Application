<h2> <?php  echo $title; ?></h2>

<?php  echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label> Title</label>
    <input type="text" name="title" placeholder="Add Title" class="form-control">
  </div>

  <div class="form-group">
    <label> Body </label>
    <textarea id="my_editor" name="body" class="form-control" placeholder="Post Body"></textarea>
  </div>
  <div class="form-group">
    <label> category </label>
    <select class="form-control" name="category_id">
      <?php foreach ($categories as $category) { ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label> Upload Image </label>
    <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-primary"> Submit </button>
</form>

<h2> <?php echo $title ?></h2>

<?php  echo validation_errors(); ?>

<?php  echo form_open_multipart('categories/create'); ?>
  <div class="form-group">
    <label> Name </label>
    <input type="text" name="name" placeholder="Add Name" class="form-control"> <br>
    <button type="submit" class="btn btn-default"> Submit </button>
  </div>
</form>

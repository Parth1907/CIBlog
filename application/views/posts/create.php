<?php if (isset($upload_status) && $upload_status === 'error') : ?>
    <div class="alert alert-danger">
        <?php echo $upload_error; ?>
    </div>
<?php endif; ?>

<h2>
    <?= $title; ?>
</h2>

<?php echo validation_errors() ?>

<?php echo form_open_multipart('posts/create') ?>
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title">
</div>
<div class="form-group mt-2">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
</div>
<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach;?>
    </select>
</div>
<div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
</div>
<button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

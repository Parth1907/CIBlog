<h2>
    <?= $title; ?>
</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update') ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add title" value="<?php echo $post['title'] ?>">
</div>
<div class="form-group mt-2">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body"
        placeholder="Add Body"><?php echo $post['body'] ?></textarea>
</div>
<div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">         
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['id']; ?>"> 
                <?php echo $category['name']; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<!-- Currently the image cant be edited once uploaded -->
<div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
    <img class="post-thumb" src="<?php echo base_url()?>assets/images/posts/<?=$post['post_image'] ?>" alt="">
</div>

<button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

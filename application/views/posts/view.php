<h2>
    <?= $post['title'] ?>
</h2>
<div class="post-img d-flex justify-content-center">
    <img src="<?php echo base_url() ?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="">
</div>
<div class="post-body">
    <?= $post['body'] ?>
</div>
<small class="post-date">Posted on:
    <?= $post['created_at']; ?>
</small>
<hr>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<div class="d-flex justify-content-between">
    <!-- Edit button -->
    <a class="btn btn-primary pull-left" href="edit/<?php echo $post['slug'] ?>">Edit</a>
    <!-- Delete button -->
    <?= form_open('posts/delete/' . $post['id']) ?>
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>
<hr>
<?php endif; ?>

<h3>Comments</h3>
<?php if ($comments): ?>
    <?php foreach ($comments as $comment): ?>
        <div class="bg-secondary">
            <p class="mb-0">
                <?= $comment['body'] ?>
            </p>

            <div class="fw-bold">[by <strong>
                    <?= $comment['name'] ?>
                </strong>]</div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No Comments to Display</p>
<?php endif; ?>
<hr>
<h3>Add comment</h3>
<?php
echo validation_errors();
echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?= $post['slug'] ?>">
<button class="btn btn-primary" type="submit">Submit</button>
</form>
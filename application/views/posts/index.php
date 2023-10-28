<!-- <h1 class="text-center">Home</h1>
<p class="text-center">Welcome to the CIBlog app</p> -->


<h2>
    <?= $title ?>
</h2>
<?php foreach ($posts as $post): ?>
    <h3>
        <?php echo $post['title']; ?>
    </h3>
    <div class="row mb-3">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"
                alt="">
        </div>
        <div class="col-md-9">
            <small class="post-date">Posted on:
                <?php echo $post['created_at']; ?>
            </small>
            <span class="badge rounded-pill bg-primary">
                <?php echo $post['name'] ?>
            </span><br>
            <?php echo word_limiter($post['body'], 50); ?><br>
            <p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read more</a></p>
        </div>
    </div>
<?php endforeach; ?>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>
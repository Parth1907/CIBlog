<?= form_open('users/login') ?>

<div class="row justify-content-center">
    <div class="col-md-4 ">
        <h1 class="text-center mt-2">
            <?= $title ?>
        </h1>
        <div class="form-group mb-2 ">
            <input type="text" name="username" class="form-control" placeholder="Enter your username" required
                autofocus>
        </div>
        <div class="form-group mb-2">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required
                autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</div>

<?= form_close() ?>
<h2>
    <?= $title ?>
</h2>

<?php
echo validation_errors();
echo form_open('users/register');
?>
<div class="row justify-content-center">
    <div class="col-md-4 ">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Zipcode</label>
            <input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?= form_close() ?>
    </div>
</div>
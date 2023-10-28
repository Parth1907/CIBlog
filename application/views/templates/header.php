<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url(); ?>posts">CIBlog</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if(!$this->session->userdata('logged_in')): ?>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                    </li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')): ?>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <!-- <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form> -->
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Flash messages -->
        <?php

        if ($this->session->flashdata('user_registered')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p>';
        }

        if ($this->session->flashdata('post_created')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('post_created') . '</p>';
        }
        if ($this->session->flashdata('post_updated')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('post_updated') . '</p>';
        }
        if ($this->session->flashdata('post_deleted')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('post_deleted') . '</p>';
        }
        if ($this->session->flashdata('category_created')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('category_created') . '</p>';
        }
        if ($this->session->flashdata('user_loggedin')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>';
        }
        if ($this->session->flashdata('login_failed')) {
            echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>';
        }
        if ($this->session->flashdata('user_loggedout')) {
            echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p>';
        }


        ?>
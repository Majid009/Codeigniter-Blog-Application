<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CI Blog </title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="http://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
             <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
             <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(!$this->session->userdata('logged_in'))
            { ?>
              <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
              <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
            <?php
            } ?>

            <?php if($this->session->userdata('logged_in'))
            { ?>
              <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
              <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
              <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
            <?php
            } ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!--- Check fro flash messages-->
      <?php if($this->session->flashdata('user_registered')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('user_registered')."</p>";
      } ?>

      <?php if($this->session->flashdata('post_created')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('post_created')."</p>";
      } ?>

      <?php if($this->session->flashdata('post_updated')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('post_updated')."</p>";
      } ?>

      <?php if($this->session->flashdata('post_deleted')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('post_deleted')."</p>";
      } ?>

      <?php if($this->session->flashdata('category_created')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('category_created')."</p>";
      } ?>

      <?php if($this->session->flashdata('login_failed')){
        echo "<p class='alert alert-danger'>".$this->session->flashdata('login_failed')."</p>";
      } ?>

      <?php if($this->session->flashdata('user_loggedin')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('user_loggedin')."</p>";
      } ?>

      <?php if($this->session->flashdata('user_loggedout')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('user_loggedout')."</p>";
      } ?>

      <?php if($this->session->flashdata('category_deleted')){
        echo "<p class='alert alert-success'>".$this->session->flashdata('category_deleted')."</p>";
      } ?>

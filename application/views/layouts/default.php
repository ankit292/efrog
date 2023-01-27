<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('layouts/meta');?>
</head>
<body>
  <?php $this->load->view('layouts/header');?>
   <?php if($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="alert-danger-massage"><?php echo $this->session->flashdata('error') ;?></div>
    </div>
    <?php } 
    if($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <button class="close" data-dismiss="alert">×</button>
        <div class="alert-success-massage"><?php echo $this->session->flashdata('success') ;?></div>
    </div>
    <?php } 
    if($this->session->flashdata('info')) { ?>
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="alert-info-massage"><?php echo $this->session->flashdata('info') ;?></div>
    </div>
<?php } ?>
  <?php echo isset($content)?$content:'&nbsp;'?>
<?php $this->load->view('layouts/footer');?>
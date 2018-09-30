<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CI Data</title>
    <meta charset="utf-8">
  <?php
  if (isset($refresh)){?>
    <meta http-equiv="refresh" content="<?php echo $refresh;?>">
  <?php } ?>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"></link>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"></link>
	</head>
	<body>
	<?php
		$i = 'index.php/';
		$r = $i.'reports/view/';
		$u = $i.'auth/';
	?>
	 <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="<?php echo base_url();?>" class="navbar-brand">Pro-001</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Reports <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="<?php echo base_url().$r;?>1">001</a>
                <a class="dropdown-item" href="<?php echo base_url().$r;?>2">002</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url().$r;?>3">003</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url().$r;?>4">004</a>
              </div>
            </li>
       		<li class="nav-item">
	        	<a class="nav-link" href="<?php echo base_url().$i;?>data">Data</a>
	        </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().$i;?>about">About</a>
            </li>
            <?php if ($this->ion_auth->logged_in()){ ?>
	      	  <?php if ($this->ion_auth->is_admin()){ ?>
	      		<li class="nav-item">
	        		<a class="nav-link" href="<?php echo base_url().$u;?>index">Users</a>
	      		</li>
	      	  <?php } ?>
	    		<li class="nav-item">
	        		<a class="nav-link" href="<?php echo base_url().$u;?>logout">LogOut</a>
	    		</li>
	    	<?php } ?>	
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
            <?php
            if ($this->ion_auth->logged_in()){ 
	      	  $user = $this->ion_auth->user()->row();
			  echo '<span class="nav-link">Hy '. $user->first_name . '</span>';
			}else{ ?>
	        	<a class="nav-link" href="<?php echo base_url().$u;?>login">LogIn</a>
	    	<?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </div>

<div class="container" style="min-height:350px !important;">
<?php if ($title!=null){ ?>
	<h1><?php echo $title; ?></h1>
<?php } ?>

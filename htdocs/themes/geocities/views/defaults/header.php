<!DOCTYPE html>
<?php
$page_title = '';
if(isset($title))
{
    $page_title .= $title . ' - ';
}
$page_title .= $this->config->item('site_name');

$page_description = '';
if(isset($description))
{
    $page_description .= $description . ' - ';
}
$page_description .= $this->config->item('site_description');
?>
<html lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title><?php echo $page_title; ?></title>
		<meta name="description" content="<?php echo $page_description; ?>">
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/geocities/js/',
    'style_dir'  => 'themes/geocities/css/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => base_url(),
    'combine'	 => true,
    'dev'		 => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('bootstrap.css');
$this->carabiner->css('bootstrap-responsive.css');
$this->carabiner->css('style.css');
$this->carabiner->css('codemirror.css');

$this->carabiner->display('css'); 

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	</head>
	<body>		
		<header>
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand title" href="<?php echo base_url(); ?>"><img style="padding-right: 5px;" src="<?php echo base_url(); ?>themes/geocities/images/7upspot.gif" alt="" /><?php echo $this->config->item('site_name'); ?></a>
						<div class="nav-collapse">
							<ul style="margin-top: 5px;" class="nav">
								<?php $l = $this->uri->segment(1)?>
<?php if($this->config->item('enable_adminlink')){ ?>
								<li><a href="<?php echo base_url() . 'spamadmin'; ?>" title="<?php echo lang('menu_admin'); ?>"><?php echo lang('menu_admin'); ?></a></li>
<?php } ?>
								<li><a <?php if($l == ""){ echo 'class="active"'; }?> href="<?php echo base_url()?>" title="<?php echo lang('menu_create_title'); ?>"><?php echo lang('menu_create'); ?></a></li>
<?php if($this->config->item('private_only') || $this->config->item('disable_recent')) {} else { ?>
								<li><img class="pull-left" style="margin-top: 10px" src="<?php echo base_url(); ?>themes/geocities/images/new.gif"><a style="float: left; padding: 10px 15px 10px 5px;" <?php if($l == "lists" || $l == "view" and $this->uri->segment(2) != "options"){ echo 'class="active"'; }?> href="<?php echo site_url('lists'); ?>" title="<?php echo lang('menu_recent_title'); ?>"><?php echo lang('menu_recent'); ?></a></li>
<?php } ?>
<?php if($this->config->item('private_only') || $this->config->item('disable_trends')) {} else { ?>
								<li><img class="pull-left" style="margin-top: 7px" src="<?php echo base_url(); ?>themes/geocities/images/hot.gif"><a style="float: left; padding: 10px 15px 10px 5px;" <?php if($l == "trends"){ echo 'class="active"'; }?> href="<?php echo site_url('trends'); ?>" title="<?php echo lang('menu_trending_title'); ?>"><?php echo lang('menu_trending'); ?></a></li>
<?php } ?>
<?php if(! $this->config->item('disable_api')){ ?>
								<li><a  <?php if($l == "api"){ echo 'class="active"'; }?> href="<?php echo site_url('api'); ?>" title="<?php echo lang('menu_api'); ?>"><?php echo lang('menu_api'); ?></a></li>
<?php } ?>
<?php if(!$this->config->item('disable_about')){ ?>
								<li><a  <?php if($l == "about"){ echo 'class="active"'; }?> href="<?php echo site_url('about'); ?>" title="<?php echo lang('menu_about'); ?>"><?php echo lang('menu_about'); ?></a></li>
<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
				<?php if(isset($status_message)){?>
				<div class="message success change">
					<div class="container">
						<?php echo $status_message; ?>
					</div>
				</div>
				<?php } ?>				

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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page_title; ?></title>
		<meta name="description" content="<?php echo $page_description; ?>">
<?php

//Carabiner
$this->carabiner->config(array(
    'script_dir' => 'themes/stikkedizr/js/',
    'style_dir'  => 'themes/stikkedizr/css/',
    'cache_dir'  => 'static/asset/',
    'base_uri'	 => base_url(),
    'combine'	 => true,
    'dev'		 => !$this->config->item('combine_assets'),
));

// CSS
$this->carabiner->css('bootstrap.min.css');
$this->carabiner->css('font-awesome.min.css');
$this->carabiner->css('style.css');
$this->carabiner->css('codemirror.css');

$this->carabiner->display('css');

$searchparams = ($this->input->get('search') ? '?search=' . $this->input->get('search') : '');

?>
	<script type="text/javascript">
	//<![CDATA[
	var base_url = '<?php echo base_url(); ?>';
	//]]>
	</script>
	</head>
	<body>		
		<header>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#snip-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> <?php echo $this->config->item('site_name'); ?></a>
					</div>
					<div class="collapse navbar-collapse" id="snip-nav">
						<ul class="nav navbar-nav">
							<?php $l = $this->uri->segment(1)?>
<?php if($this->config->item('enable_adminlink')){ ?>
								<li><a href="<?php echo base_url() . 'spamadmin'; ?>" title="<?php echo lang('menu_admin'); ?>"><?php echo lang('menu_admin'); ?></a></li>
<?php } ?>
							<li><a <?php if($l == ""){ echo 'class="active"'; }?> href="<?php echo base_url()?>" title="<?php echo lang('menu_create_title'); ?>"><i class="fa fa-plus-circle"></i> <?php echo lang('menu_create'); ?></a></li>
							<?php if($this->config->item('private_only') || $this->config->item('disable_recent')) {} else { ?>
								<li><a <?php if($l == "lists" || $l == "view" and $this->uri->segment(2) != "options"){ echo 'class="active"'; }?> href="<?php echo site_url('lists'); ?>" title="<?php echo lang('menu_recent_title'); ?>"><i class="fa fa-rss-square"></i> <?php echo lang('menu_recent'); ?></a></li>
							<?php } ?>
							<?php if($this->config->item('private_only') || $this->config->item('disable_trends')) {} else { ?>
								<li><a <?php if($l == "trends"){ echo 'class="active"'; }?> href="<?php echo site_url('trends'); ?>" title="<?php echo lang('menu_trending_title'); ?>"><i class="fa fa-star"></i> <?php echo lang('menu_trending'); ?></a></li>
							<?php } ?>
							<?php if(!$this->config->item('disable_api')){ ?>
								<li><a  <?php if($l == "api"){ echo 'class="active"'; }?> href="<?php echo site_url('api'); ?>" title="<?php echo lang('menu_api'); ?>"><i class="fa fa-gear"></i> <?php echo lang('menu_api'); ?></a></li>
							<?php } ?>
							<?php if(!$this->config->item('disable_about')){ ?>
							<li><a  <?php if($l == "about"){ echo 'class="active"'; }?> href="<?php echo site_url('about'); ?>" title="<?php echo lang('menu_about'); ?>"><i class="fa fa-info-circle"></i> <?php echo lang('menu_about'); ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<?php if ($this->config->item('alert_banner')) { ?>
			<!-- Alert Banner -->
			<div class="container">
				<div class="alert-banner">
					<h3><?php echo lang('alert_banner'); ?></h3>
				</div>
			</div>
		<?php } ?>

		<div class="container">
				<?php if(isset($status_message)){ ?>
				<div class="message success change">
					<div class="container">
						<?php echo $status_message; ?>
					</div>
				</div>
				<?php } ?>				

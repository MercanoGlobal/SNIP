<footer class="footer">
	<?php if ($this->config->item('alert_footer')) { ?>
		<!-- Alert Footer -->
		<p><?php echo lang('alert_footer'); ?></p>
	<?php } ?>
	<?php echo lang('powered_by'); ?> <a href="<?php echo proj_url(); ?>"><?php echo proj_name(); ?></a>
</footer>

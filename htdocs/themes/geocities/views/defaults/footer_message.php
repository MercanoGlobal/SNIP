<footer class="footer">
	<?php if ($this->config->item('alert_footer')) { ?>
		<!-- Alert Footer -->
		<p><?php echo lang('alert_footer'); ?></p>
	<?php } ?>
	<?php echo lang('powered_by'); ?> <a href="<?php echo proj_url(); ?>"><?php echo proj_name(); ?></a>
    <br />
    <br />
    <table cellpadding="2" cellspacing="2">
      <tbody>
        <tr>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/webtrips.gif">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/geocities.jpg">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/notepad.gif">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/ie_logo.gif">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/ns_logo.gif">
          </td>
        </tr>
      </tbody>
    </table>
</footer>

<?php echo validation_errors(); ?>

<div class="row">
	<div class="span12">
		<div class="page-header">
			<h1><?php if(!isset($page['title'])){ ?>
			<?php echo lang('paste_create_new'); ?>
			<?php } else { ?>
				<?php echo $page['title']; ?>
			<?php } ?>
			</h1>
		</div>
	</div>
	<div class="span12">
		<form action="<?php echo base_url(); ?>" method="post" class="form-vertical well" enctype="multipart/form-data">
			<div class="row">
				<div class="span3">
					<label for="name"><?php echo lang('paste_author'); ?>
					</label>
					<?php $set = array('name' => 'name', 'id' => 'name', 'class' => 'span3', 'value' => $name_set, 'maxlength' => '32', 'tabindex' => '1');
					echo form_input($set);?>
				</div>
				<div class="span3">
					<label for="title">
						<?php echo lang('paste_title'); ?>
					</label>
					<?php $set = array('name' => 'title', 'id' => 'title', 'class' => 'span3', 'value' => (isset($title_set) ? $title_set : ''), 'maxlength' => '50', 'tabindex' => '2');
					echo form_input($set);?>
				</div>
				<div class="span3">
					<label for="lang">
						<?php echo lang('paste_lang'); ?>
					</label>
					<?php $lang_extra = 'id="lang" class="select span3" tabindex="3"'; echo form_dropdown('lang', $languages, $lang_set, $lang_extra); ?>
				</div>
			</div>
			<div class="row">
				<div class="span11">
					<label for="code"><?php echo lang('paste_yourpaste'); ?>
						<span class="instruction"> - <?php echo lang('paste_yourpaste_desc'); ?></span>
					</label>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<textarea id="code" class="custom-textarea" name="code" rows="20" tabindex="4"><?php if(isset($paste_set)) { echo $paste_set; } ?></textarea>
				</div>
			</div>

			<?php if ($this->config->item('file_upload')) { ?>
				<div class="row">
					<div class="span11">
						<label for="file"><?php echo lang('attach_file'); ?> - 
							<input type="file" name="file" id="file">
						</label>
					</div>
				</div>
			<?php } ?>

			<div class="row">
				<div class="span8">
					<?php if (!$this->config->item('disable_shorturl')) { ?>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
								<?php
									$set = array('name' => 'snipurl', 'id' => 'snipurl', 'value' => '1', 'tabindex' => '5', 'checked' => $snipurl_set);
									if ($this->config->item('disable_shorturl')){
										$set['checked'] = 0;
										$set['disabled'] = 'disabled';
									}
									echo form_checkbox($set);
								?>
								<?php echo lang('paste_create_shorturl') . ' - ' . lang('paste_shorturl_desc'); ?>
							</label>
						</div>
					</div>
					<?php } ?>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
								<?php
								$set = array('name' => 'private', 'id' => 'private', 'tabindex' => '6', 'value' => '1', 'checked' => $private_set);
										if ($this->config->item('private_only')){
											$set['checked'] = 1;
											$set['disabled'] = 'disabled';
											}
								echo form_checkbox($set);
							?>
								<?php echo lang('paste_private') . ' - ' . lang('paste_private_desc'); ?>
							</label>
						</div>
					</div>
					<div class="item">
						<label for="expire"><?php echo lang('paste_delete'); ?>
							<span class="instruction">- <?php echo lang('paste_delete_desc'); ?></span>
						</label>
						<?php 
							$expire_extra = 'id="expire" class="select" tabindex="7"';
							$options = array(
                                        "burn" => lang('exp_burn'),
                                        "5" => lang('exp_5min'),
                                        "60" => lang('exp_1h'),
                                        "1440" => lang('exp_1d'),
                                        "10080" => lang('exp_1w'),
                                        "40320" => lang('exp_1m'),
                                        "483840" => lang('exp_1y'),
									);
                            if(! config_item('disable_keep_forever')) {
                                $options['0'] = lang('exp_forever');
                            }
						echo form_dropdown('expire', $options, $expire_set, $expire_extra); ?>
					</div>
				</div>
			</div>
		<?php if($reply){ ?>
			<input type="hidden" value="<?php echo $reply; ?>" name="reply" />
		<?php } ?>
        <?php if($this->config->item('enable_captcha') && $this->session->userdata('is_human') === null) { ?>
			<div class="item_group">
				<div class="item item_captcha">
					<label for="captcha"><?php echo lang('paste_spam'); ?>
						<span class="instruction"><?php if(!$use_recaptcha) { ?>- <?php echo lang('paste_spam_desc'); } ?></span>
					</label>
                    <?php if($use_recaptcha){
                        echo recaptcha_get_html($recaptcha_publickey);
                    } else { ?>
                        <img class="captcha" src="<?php echo site_url('view/captcha'); ?>?<?php echo date('U', time()); ?>" alt="captcha" width="180" height="40" />
                        <input value="" type="text" id="captcha" name="captcha" tabindex="2" maxlength="32" style="margin:5px 0 5px 0;" />
                    <?php } ?>
				</div>
			</div>
		<?php } ?>
			<div class="form-actions">
				<button type="submit" name="submit" value="submit" class="btn btn-large btn-primary">
					<i class="icon-pencil icon-white"></i>
					<?php echo lang('paste_create'); ?>
				</button>
				<?php
				if ($this->config->item('csrf_protection') === TRUE)
				{
					if(isset($_COOKIE[$this->config->item('csrf_cookie_name')])) {
						echo '<input type="hidden" name="'.$this->config->item('csrf_token_name').'" value="'.html_escape($_COOKIE[$this->config->item('csrf_cookie_name')]).'" style="display:none;" />'."\n";
					}
				}
				?>
			</div>
		</form>
	</div>
</div>

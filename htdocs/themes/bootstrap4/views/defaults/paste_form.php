<?php echo validation_errors(); ?>

<div class="">
    <div class="page-header">
        <h1>Create new paste</h1>
    </div>
    
	<form class="paste-form" action="<?php echo base_url(); ?>" method="post" enctype="multipart/form-data">

        <div class="form-row">
            <div class="col pb-2">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" placeholder="Your name">
            </div>
        
            <div class="col">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Your title">
            </div>
            
            <div class="col-sm">
                <label for="lang">Language</label>
                <?php $lang_extra = 'id="lang" class="custom-select" tabindex="3"'; echo form_dropdown('lang', $languages, $lang_set, $lang_extra); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="code">Your paste - Paste your text here</label>
            <textarea class="form-control" id="code" name="code" rows="20"></textarea>
        </div>

		<?php if ($this->config->item('file_upload')) { ?>
			<div class="form-group">
				<label for="file"><?php echo lang('attach_file'); ?> - 
					<input type="file" name="file" id="file">
				</label>
			</div>
		<?php } ?>

        <div class="form-group">
            <?php if (!$this->config->item('disable_shorturl')){ ?>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="snipurl" id="snipurl" checked="<?php $snipurl_set ? "checked" : "" ?>">
                <label class="custom-control-label" for="snipurl">Create a shorter url that redirects to your paste?</label>
            </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="private" id="private" <?php $private_set ? 'checked="checked"' : "" ?>" <?php $this->config->item('private_only') ? "disabled" : "" ?>>
                <label class="custom-control-label" for="private">Avoid showing your paste in recent listing?</label>
            </div>
        </div>

		<div class="form-group">
            <div class="col-5 pl-0">
                <label for="expire">Expiry - When should we delete your paste?</label>
                <?php
                $expire_extra = 'id="expire" class="custom-select" tabindex="7"';
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
        
        <!-- set pasteid to a hidden variable if this is a reply -->
        <?php if($reply){ ?>
		<input type="hidden" value="<?php echo $reply; ?>" name="reply" />
        <?php } ?>

        <?php if($this->config->item('enable_captcha') && $this->session->userdata('is_human') === null){ ?>
        <div class="form-group">
            <label for="captcha">Spam protection - Type in the letters</label>
            <div class="w-100"></div>
            <?php 
            if($use_recaptcha){
                echo recaptcha_get_html($recaptcha_publickey, null, stristr(base_url(), 'https'));
            } else { ?>
            <img class="captcha" src="<?php echo site_url('view/captcha'); ?>?<?php echo date('U', time()); ?>" alt="captcha" width="180" height="40" />
            <input class="form-control col-3" type="text" id="captcha" name="captcha" tabindex="2" maxlength="32" />
            <?php } ?>
        </div>
        <?php } ?>

        <div class="form-group submit-form">
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Create</button>
        </div
        
		<?php
		if ($this->config->item('csrf_protection') === TRUE)
		{
			if(isset($_COOKIE[$this->config->item('csrf_cookie_name')])) {
				echo '<input type="hidden" name="'.$this->config->item('csrf_token_name').'" value="'.html_escape($_COOKIE[$this->config->item('csrf_cookie_name')]).'" style="display:none;" />'."\n";
			}
		}
		?>
		<div class="spacer"></div>

	</form>
</div>

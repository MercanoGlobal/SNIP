<?php $this->load->view('defaults/header');

$seg3 = $this->uri->segment(3);

if($seg3 != 'diff'){
    $page_url = $url;
}else{
    $page_url = $url . '/diff';
}

if(isset($insert)){
	echo $insert;
}?>

<section>
	<div class="row">
		<div class="span12">
			<div class="page-header">
				<h1 class="pagetitle right"><?php echo $title; ?></h1>
			</div>
			<div class="row">
				<div class="span12 meta">
					<div class="detail by"><?php echo lang('paste_from'); ?> <?php echo $name; ?>, <?php $p = explode(',', timespan($created, time())); echo sprintf($this->lang->line('paste_ago'),$p[0]); ?>, <?php echo lang('paste_writtenin'); ?> <?php echo $lang; ?>.</div>
					<?php if($expire > 0) { ?><span class="detail by"><?php echo sprintf(lang('paste_expire'), random_expire_msg()); ?> <?php echo timespan(time(), $expire, 1); ?>.</span><?php } ?>
					<?php if(isset($inreply) && is_array($inreply)) { ?>
					<div class="detail by">
						<?php echo lang('paste_isareply'); ?> <a href="<?php echo $inreply['url']?>"><?php echo $inreply['title']; ?></a> <?php echo strtolower(lang('paste_from')); ?> <?php echo $inreply['name']; ?>
					<?php } ?>
					<div class="qr">
						<?php if($this->config->item('qr_enabled') && !$burn) { ?>
							<img src="<?php echo site_url('view/qr/' . $pid ); ?>">
						<?php } ?>
					</div>
					<?php if($seg3 != 'diff') { ?>
						<?php if(isset($inreply)) { ?>
							- <a href="<?php echo $url . '/diff'; ?>"><?php echo lang('paste_viewdiff'); ?></a>
						<?php } ?>
					<?php } else { ?>
						- <a href="<?php echo $url; ?>"><?php echo lang('paste_goback'); ?></a>
					<?php } ?>
					<div class="detail"><span class="item"><?php echo lang('paste_url'); ?> </span><a href="<?php echo $url; ?>"><?php echo $url; ?></a></div>
					<?php if(!empty($snipurl)){?>
						<div class="detail"><div class="item"><?php echo lang('paste_shorturl');?> </div><a href="<?php echo $snipurl; ?>"><?php echo htmlspecialchars($snipurl) ?></a></div>
					<?php }?>
					<div class="detail"><span class="item"><?php echo lang('paste_embed'); ?> </span><input data-lang-showcode="<?php echo lang('paste_showcode'); ?>" id="embed_field" type="text" value="<?php echo htmlspecialchars('<iframe src="' . site_url('view/embed/' . $pid) . '" style="border:none;width:100%"></iframe>'); ?>" /></div>

					<div class="detail">
						<?php if($seg3 != 'diff') { ?>
							<a class="control" href="<?php echo site_url("view/download/".$pid); ?>"><?php echo lang('paste_download'); ?></a> <?php echo lang('paste_or'); ?> <a class="control" href="<?php echo site_url("view/raw/".$pid); ?>"><?php echo lang('paste_viewraw'); ?></a></div>
						<?php } else { ?>
							<?php echo lang('paste_viewdiffs'); ?>
							<?php if(isset($inreply) && is_array($inreply) && array_key_exists('url', $inreply) && array_key_exists('title', $inreply)) { ?>
								<a href="<?php echo $inreply['url']; ?>"><?php echo $inreply['title']; ?></a>
							<?php } ?>
							<?php echo lang('paste_and'); ?> <a href="<?php echo $url; ?>"><?php echo $title; ?></a>
						<?php } ?>

						<div class="detail" style="margin-top:5px;">
							<!-- AddToAny BEGIN -->
							<span class="a2a_kit a2a_kit_size_32 a2a_default_style">
								<a class="a2a_button_facebook"></a>
								<a class="a2a_button_x"></a>
								<a class="a2a_button_whatsapp"></a>
								<a class="a2a_button_email"></a>
							</span>
							<script async src="https://static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section>
	<div class="row">
		<div class="span12">
			<?php if(config_item('js_editor') == 'codemirror' || config_item('js_editor') == 'ace'): ?>
				<textarea class="CodeMirror" id="code" readonly="readonly"><?php echo strip_tags($paste); ?></textarea>
			<?php else: ?>
				<blockquote class="CodeMirror" id="code"><?php echo $paste; ?></blockquote>
			<?php endif; ?>
		</div>
	</div>
</section>

    <?php
    if (!empty($file)) {
        $file_path = base_url(config_item('upload_path') . $file);

        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
		$fileType = strtoupper($fileExtension);
        $rendered_image_extensions = ['jpg', 'jpeg', 'png', 'apng', 'gif', 'webp', 'avif', 'svg']; // All image files that will be rendered directly on the page
		$rendered_video_extensions = ['mp4', 'webm']; // All video files that will be rendered directly on the page
		$audio_extensions = ['mp3', 'ogg', 'wav']; // All audio files that will be rendered directly on the page

        if (in_array($fileExtension, $rendered_image_extensions)) {
            // Display image preview if it's an image file
            echo '<div class="row"><div class="span4 offset4">';
            echo '<img src="' . $file_path . '" alt="File Preview" /><br>';
            echo '<div style="text-align:center;"><a href="' . $file_path . '" download>Download ' . $fileType . ' Attachment</a></div>';
            echo '</div></div><br>';
        } else if (in_array($fileExtension, $rendered_video_extensions)) {
			// Display video player for audio files
            echo '<div class="row"><div class="span4 offset4">';
            echo '<video width="100%" height="auto" controls><source src="' . $file_path . '" alt="File Preview" />Your browser does not support the video tag.</video><br>';
            echo '<div style="text-align:center;"><a href="' . $file_path . '" download>Download ' . $fileType . ' Attachment</a></div>';
            echo '</div></div><br>';
		} else if (in_array($fileExtension, $audio_extensions)) {
			// Display audio player for audio files
			echo '<div class="row"><div class="span4 offset4">';
			echo '<audio controls><source src="' . $file_path . '" alt="File Preview" />Your browser does not support the audio element.</audio><br>';
			echo '<div style="text-align:center;"><a href="' . $file_path . '" download>Download ' . $fileType . ' Attachment</a></div>';
			echo '</div></div><br>';
		} else {
            // For other file types, only show a nice download button
            echo '<div class="row"><div style="text-align:center;">';
            echo '<a class="btn btn-default" href="' . $file_path . '" download>📥Download ' . $fileType . ' Attachment</a>';
            echo '</div></div><br>';
        }
    }
    ?>

<section class="replies">
<?php

function checkNum($num){
	return ($num%2) ? TRUE : FALSE;
}

if(isset($replies) and !empty($replies)) {
	$n = 1;
?>
	<h1><?php echo lang('paste_replies'); ?> <?php echo $title; ?> <a href="<?php echo site_url('view/rss/' . $pid); ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJDSURBVHjajJJNSBRhGMd/887MzrQxRSLbFuYhoUhEKsMo8paHUKFLdBDrUIdunvq4RdClOq8Hb0FBSAVCUhFR1CGD/MrIJYqs1kLUXd382N356plZFOrUO/MMz/vO83+e93n+f+1zF+kQBoOQNLBJg0CTj7z/rvWjGbEOIwKp9O7WkhtQc/wMWrlIkP8Kc1lMS8eyFHpkpo5SgWCCVO7Z5JARhuz1Qg29fh87u6/9VWL1/SPc4Qy6n8c0FehiXin6dcCQaylDMhqGz8ydS2hKkmxNkWxowWnuBLHK6G2C8X6UJkBlxUmNqLYyNbzF74QLDrgFgh9LLE0NsPKxjW1Hz2EdPIubsOFdH2HgbwAlC4S19dT13o+3pS+vcSfvUcq9YnbwA6muW9hNpym/FWBxfh0CZkKGkPBZeJFhcWQAu6EN52QGZ/8prEKW+cdXq0039UiLXhUYzdjebOJQQI30UXp6mZn+Dtam32Afu0iyrgUvN0r+ZQbr8HncSpUVJfwRhBWC0hyGV8CxXBL5SWYf9sYBidYLIG2V87/ifVjTWAX6AlxeK2C0X8e58hOr/Qa2XJ3iLMWxB1h72tHs7bgryzHAN2o2gJorTrLxRHVazd0o4TXiyV2Yjs90uzauGvvppmqcLjwmbZ3V7BO2HOrBnbgrQRqWUgTZ5+Snx4WeKfzCCrmb3axODKNH+vvUyWjqyK4DiKQ0eXSpFsgVvLJQWpH+xSpr4otg/HI0TR/t97cxTUS+QxIMRTLi/9ZYJPI/AgwAoc3W7ZrqR2IAAAAASUVORK5CYII=" alt="rss" title="RSS" /></a></h1>

	<table class="recent table table-striped table-bordered">
		<thead>
			<tr>
				<th class="title"><?php echo lang('table_title'); ?></th>
				<th class="name"><?php echo lang('table_name'); ?></th>
				<th class="lang"><?php echo lang('table_lang'); ?></th>
				<th class="hidden">UNIX</th>
				<th class="time"><?php echo lang('table_time'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($replies as $reply){
				if(checkNum($n)){
					$eo = "even";
				} else {
					$eo = "odd";
				}
				$n++;
			?>

			<tr class="<?php echo $eo; ?>">
				<td class="first"><a href="<?php echo site_url("view/".$reply['pid']); ?>"><?php echo $reply['title']; ?></a></td>
				<td><?php echo $reply['name']; ?></td>
				<td><?php echo $reply['lang']; ?></td>
				<td class="hidden"><?php echo $reply['created']; ?></td>
				<td><?php $p = explode(",", timespan($reply['created'], time()));
				echo sprintf($this->lang->line('paste_ago'),$p[0]); ?>.</td>
			</tr>

			<?php } ?>
		</tbody>
	</table>
	<?php echo $pages;
}

if(!$this->config->item('disable_replies')) {
	$reply_form['page']['title'] = lang('paste_replyto') . ' "' . $title . '"';
	$reply_form['page']['instructions'] = lang('paste_replyto_desc');
	$this->load->view('defaults/paste_form', $reply_form);
} ?>

</section>

<?php $this->load->view('view/view_footer'); ?>

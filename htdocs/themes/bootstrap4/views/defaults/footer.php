					</div>
				</div>
			<?php $this->load->view('defaults/footer_message'); ?>
        </div>
			
<?php

//codemirror modes
if(isset($codemirror_modes)){
    echo '<div style="display: none;" id="codemirror_modes">' . json_encode($codemirror_modes) . '</div>';
}

//ace modes
if(isset($ace_modes)){
    echo '<div style="display: none;" id="ace_modes">' . json_encode($ace_modes) . '</div>';
}

//Javascript
$this->carabiner->js('jquery.js');
$this->carabiner->js('jquery.browser.min.js');
$this->carabiner->js('jquery.timers.js');
$this->carabiner->js('jquery-ui-selectable-combined.min.js');
$this->carabiner->js('crypto-js/rollups/aes.js');
$this->carabiner->js('lz-string-1.3.3-min.js');
$this->carabiner->js('filereader.js');
$this->carabiner->js('linkify.min.js');
$this->carabiner->js('linkify-jquery.min.js');
if(config_item('js_editor') == 'codemirror') {
    $this->carabiner->js('codemirror/codemirror.js');
}
if(config_item('js_editor') == 'ace') {
    $this->carabiner->js('ace/ace.js');
}
$this->carabiner->js('snip.js');

$this->carabiner->display('js');
echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';

?>

<!-- External GDPR JS Cookie Script https://cookie-bar.eu/ -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?theme=flying&always=1"></script>

	</body>
</html>
